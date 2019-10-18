<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CurrencySymbol\Controller\Adminhtml\System\Currency;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Controller\ResultFactory;
use Magento\CurrencySymbol\Controller\Adminhtml\System\Currency as CurrencyAction;

/**
 * Class FetchRates
 */
class FetchRates extends CurrencyAction implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * Fetch rates action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\Session $backendSession */
        $backendSession = $this->_objectManager->get(\Magento\Backend\Model\Session::class);
        try {
            $service = $this->getRequest()->getParam('rate_services');
            $this->_getSession()->setCurrencyRateService($service);
            if (!$service) {
                throw new LocalizedException(__('The Import Service is incorrect. Verify the service and try again.'));
            }
            try {
                /** @var \Magento\Directory\Model\Currency\Import\ImportInterface $importModel */
                $importModel = $this->_objectManager->get(\Magento\Directory\Model\Currency\Import\Factory::class)
                    ->create($service);
            } catch (\Exception $e) {
                throw new LocalizedException(
                    __("The import model can't be initialized. Verify the model and try again.")
                );
            }
            $rates = $importModel->fetchRates();
            $errors = $importModel->getMessages();
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->messageManager->addWarningMessage($error);
                }
                $this->messageManager->addWarningMessage(
                    __('Click "Save" to apply the rates we found.')
                );
            } else {
                $this->messageManager->addSuccessMessage(__('Click "Save" to apply the rates we found.'));
            }

            $backendSession->setRates($rates);
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('adminhtml/*/');
    }
}
