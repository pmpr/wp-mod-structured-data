<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad11c96360             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\Setting\Intangible as IntangibleSetting; use Pmpr\Module\StructuredData\Setting\Setting; class PostalAddress extends ContactPoint { protected ?string $postalCode = null; protected ?string $addressRegion = null; protected ?string $streetAddress = null; protected ?string $addressCountry = null; protected ?string $addressLocality = null; protected ?string $postOfficeBoxNumber = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto kuicqywysciceggs; } $agwamyeymqaiuwgk = Setting::amemeossuowwgsmo(); $this->kiwqskkuyiyykqea(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::aqsgigumqqiuease))->egsmocswkweayewk(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::uusaqgcqgykwsqww))->gewiqeuakougiuwy(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::essyoswsmawuwayy))->oyicmcauoiuygyeo(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::gwiayggcmggiwoua))->smuuqiawqukweeqi(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::sqmyaiyuaqsweace))->mcycmqaawmcwecso(ManipulateArray::get($agwamyeymqaiuwgk, IntangibleSetting::cawqsoeoksguoaym)); kuicqywysciceggs: parent::__construct($goiqeyeaqmicqiky); } public function guowuukcooaissic() { return $this->addressCountry; } public function gewiqeuakougiuwy(string $cqmeayuwuckoskoq) { $this->addressCountry = $cqmeayuwuckoskoq; return $this; } public function oisowgaowgysagsk() { return $this->addressLocality; } public function smuuqiawqukweeqi(string $somwkmoggimgkkqs) { $this->addressLocality = $somwkmoggimgkkqs; return $this; } public function ksiismgygcsuwosy() { return $this->addressRegion; } public function kiwqskkuyiyykqea(string $sgqykuqiuqcqaaig) { $this->addressRegion = $sgqykuqiuqcqaaig; return $this; } public function oakycyigckisigio() { return $this->postOfficeBoxNumber; } public function mcycmqaawmcwecso(string $cgwscumyeqqgqowe) { $this->postOfficeBoxNumber = $cgwscumyeqqgqowe; return $this; } public function qygacesqaaecckea() { return $this->postalCode; } public function oyicmcauoiuygyeo(string $ueicassgwemgyyiw) { $this->postalCode = $ueicassgwemgyyiw; return $this; } public function qkkeswykequuaqmm() { return $this->streetAddress; } public function egsmocswkweayewk(string $quwaiucmgymqmkwq) { $this->streetAddress = $quwaiucmgymqmkwq; return $this; } }
