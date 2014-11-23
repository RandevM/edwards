<?php
global $ad_options;
$options = get_option( 'theme_settings', $ad_options ); 
$companyName 			= $options['company_name'];
$companyURL				= $options['company_url'];
$logoURL				= $options['logo_url'];
$companyEmailAddress	= $options['company_email_address'];
$companyRegNumber 		= $options['company_reg_number'];
$companyVATNumber 		= $options['company_vat_number'];
$addressStreet			= $options['street'];
$addressLocality		= $options['locality'];
$addressRegion			= $options['region'];
$addressPostcode		= $options['post_code'];
$location 				= $options['location'];
$phonetag 				= $options['phone_tag'];
$phonenumber 			= '020 8804 3737';
$companyEmail = $options['company_email'] =  '<a href="mailto:'.$options['company_email_address'].'">'.$options['company_email_address'].'</a>';
$sCompanyName			= '<span itemprop="name">'.$companyName.'</span>,';
$sAddressStreet			= '<span itemprop="streetAddress">'.$addressStreet.'</span>,';
$sAddressStreet2		= '<span itemprop="streetAddress">'.$addressStreet2.'</span>,';
$sAddressLocality		= '<span itemprop="addressLocality">'.$addressLocality.'</span>,';
$sAddressRegion			= '<span itemprop="addressRegion">'.$addressRegion.'</span>,';
$sAddressPostcode		= '<span itemprop="postalCode">'.$addressPostcode.'</span>';
$sPhoneNumber			= '<span itemprop="telephone">' .$phonenumber. '</span>';
$scompanyWeb			= '<span itemprop="url">' .$companyWeb. '</span>';
$sLogoURL 				= '<span><img itemprop="logo" style="display:none;" src='.$logoURL.' alt="<?php echo $companyName; ?> Logo" /></span>';
$companyAddressInline	= '<span itemprop="address" itemscope itemtype="http://schema.org/LocalBusiness"><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">' . $sAddressStreet . '&nbsp;' . $sAddressLocality . '&nbsp;' . $sAddressRegion . '&nbsp;' . $sAddressPostcode . '</span></span>';
$companyAddressStacked	= '<span itemprop="address" itemscope itemtype="http://schema.org/LocalBusiness">' . $sCompanyName .'<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">' .'<br />'. $sAddressStreet . '<br />'. $sAddressLocality . '<br />'. $sAddressRegion .'<br />'.  $sAddressPostcode . '</span></span>';
?>
