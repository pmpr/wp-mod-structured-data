<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce19634828d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use WP_Comment; class BlogPosting extends SocialMediaPosting { public function __construct($post = null, $goiqeyeaqmicqiky = true) { if (!($post && $goiqeyeaqmicqiky)) { goto mwysseaekcsiesmm; } $qscaoekmoooeuyqg = $this->sscegwueamckwmcy("\143\x61\156\137\163\x68\157\167\x5f\x61\165\164\150\157\162\137\x69\156\x5f\160\157\163\164\x5f\163\x69\156\147\x6c\145", false) ? new Person($post) : new Organization(); $kmmywmgcgwceeqii = ManipulatePost::weescwwgqgiyumyw($post, "\160\x6f\x73\164\137\x74\141\147", [self::ymckmcsiymwqucoq => "\x6e\141\x6d\145\163"]); $this->ywssmgkikwksokge($kmmywmgcgwceeqii)->oyecyiciiuqooyio($qscaoekmoooeuyqg)->mwiamauscyiwogsu(new ImageObject($post))->wieaiquucwakewgy($this->ueqesykkqeaeeoyg($post))->owykoqcycwauuioo(ManipulatePost::ymgsgecsiqeegseg($post)); mwysseaekcsiesmm: parent::__construct($goiqeyeaqmicqiky); } private function ueqesykkqeaeeoyg($post) { $kcagcoeuiasswusq = []; $wueaugmymmoawukq = ManipulatePost::waoeigwigksoikgu($post, ["\163\164\141\164\x75\x73" => "\x61\160\160\x72\x6f\x76\x65", "\x74\x79\160\x65" => "\143\157\155\155\145\x6e\164"]); if (!is_array($wueaugmymmoawukq)) { goto gommacygsykyussk; } foreach ($wueaugmymmoawukq as $uusmaiomayssaecw => $aqqmosqmsuueyaes) { if (!$aqqmosqmsuueyaes instanceof WP_Comment) { goto uougwgeyiokewkkm; } $kcagcoeuiasswusq[] = new Comment($aqqmosqmsuueyaes); uougwgeyiokewkkm: gygwewcqsmwqismo: } amgsueumgaguceaa: gommacygsykyussk: return $kcagcoeuiasswusq; } }
