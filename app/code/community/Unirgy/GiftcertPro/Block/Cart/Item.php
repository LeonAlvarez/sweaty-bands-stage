<?php
/**
 * Unirgy_Giftcert extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Unirgy
 * @package    Unirgy_Giftcert
 * @copyright  Copyright (c) 2008 Unirgy LLC
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @category   Unirgy
 * @package    Unirgy_Giftcert
 * @author     Boris (Moshe) Gurevich <moshe@unirgy.com>
 */
class Unirgy_GiftcertPro_Block_Cart_Item extends Unirgy_Giftcert_Block_Cart_Item
{
    /**
     * Get personalized thumbnail
     * @return Mage_Catalog_Model_Product_Image
     */
    public function getProductThumbnail()
    {
        $req = $this->getItem()->getBuyRequest();
        $imgSrc = $req->getData('u_personal_img_url');
        if ($imgSrc) {
            $imgSrc = str_replace(Mage::getBaseUrl('media'), '', $imgSrc);
            return $this->helper('ugiftcertpro/image')->init($this->getProduct(), 'thumbnail', $imgSrc);
        }
        return parent::getProductThumbnail();
    }
}
