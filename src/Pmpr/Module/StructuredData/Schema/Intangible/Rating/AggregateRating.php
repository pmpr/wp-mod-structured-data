<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cd00510bdd0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\Rating; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\Schema\Thing; class AggregateRating extends Rating { protected ?int $reviewCount = 0; protected ?int $ratingCount = 0; protected ?Thing $itemReviewed = null; public function __construct($qqyuqswckkcomeak = null, $goiqeyeaqmicqiky = true) { if (!($qqyuqswckkcomeak && $goiqeyeaqmicqiky)) { goto aiccyaswigkaycqk; } $uuwmqqqiwksuaise = ManipulateArray::get($qqyuqswckkcomeak, "\x74\157\x74\141\154", 0); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\143\157\x75\x6e\164", 0); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\x76\145\162\141\x67\x65", 0); $this->euaugmcwosukseuy(intval($uuwmqqqiwksuaise))->aqgscesisoeawose(intval($gaeqamemwmwsyukm))->squsoiakemiuoouq(round(floatval($wiiqgewkwwkaukyo), 2)); aiccyaswigkaycqk: parent::__construct($goiqeyeaqmicqiky); } public function iiqgqiuayuwcueys() : ?Thing { return $this->itemReviewed; } public function mwyyceoeyyyqsiou(?Thing $ccqeayaegooouysc) { $this->itemReviewed = $ccqeayaegooouysc; return $this; } public function wemamaiqweumqsqo() : ?int { return $this->ratingCount; } public function aqgscesisoeawose(?int $yoecwgecueuaaueu) { $this->ratingCount = $yoecwgecueuaaueu; return $this; } public function mykgeucqkcaaakce() : ?int { return $this->reviewCount; } public function euaugmcwosukseuy(?int $geosgykscusuqmae) { $this->reviewCount = $geosgykscusuqmae; return $this; } }
