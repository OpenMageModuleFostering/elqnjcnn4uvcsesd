<?php
class Parin_CheckoutReviewProductImage_Block_About extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logopath	=	'https://cmsblogheart.files.wordpress.com/2014/06/rvpatel.png';
        $html = <<<HTML
                <div style="background:url('$logopath') no-repeat scroll 14px 14px #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:20px 5px 20px 164px;">
                    <p>
                        <strong>FREE MAGENTO EXTENSIONS & CUSTOMIZATION</strong><br />
                        <a href="http://www.linkedin.com/in/ravippatel" target="_blank">Ravipatel</a> You can find For Magento theme Customization.<br />       
                    </p>
                    <p>
                        My Blog Hear <a href="http://cmsblogheart.wordpress.com/" target="_blank">CMS Blog Heart</a><br />
                        Should you have any questions email at <a href="mailto:ravipatelb07272@gmail.com">ravipatelb07272@gmail.com</a>
                        <br/>
                    </p>
            </div>
HTML;
        return $html;
    }
}