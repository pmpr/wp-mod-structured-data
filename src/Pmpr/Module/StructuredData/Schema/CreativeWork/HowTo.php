<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cfed099d889             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function __construct($omauuckqmiemgegq = [], $goiqeyeaqmicqiky = true) { if (!$omauuckqmiemgegq) { goto uaqackioaiqwcocy; } $this->usuqmwksoeaayaig(ManipulateArray::get($omauuckqmiemgegq, self::qescuiwgsyuikume))->gucwmccyimoagwcm(ManipulateArray::get($omauuckqmiemgegq, self::eqkeooqcsscoggia)); if (!($mcqieaigyeeyaksm = ManipulateArray::get($omauuckqmiemgegq, self::mkousmkiawwousws))) { goto mqkmcysgoiaouiwm; } $this->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); mqkmcysgoiaouiwm: $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\x63\x6f\x73\x74"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\x63\165\162\x72\x65\x6e\x63\171"); if (!($wwigiesyquoeawog && $imeywacwecgemcco)) { goto kosaqwikueyksqmw; } $this->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); kosaqwikueyksqmw: $sieqmaaeyogyamwk = ManipulateArray::get($omauuckqmiemgegq, "\164\x6f\164\141\154\124\151\155\145"); if (!$sieqmaaeyogyamwk) { goto gicyayswqyuoekcq; } $this->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); gicyayswqyuoekcq: $yeiuicqomkekqeck = ManipulateArray::get($omauuckqmiemgegq, "\x73\x75\160\x70\x6c\x69\x65\x73"); if (!is_array($yeiuicqomkekqeck)) { goto cuumeogeomowqisc; } foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $this->gquekoigiqqkwiym((new HowToSupply())->usuqmwksoeaayaig($egcsuueoacmkqwgy->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); uiosisocuwokwkie: } iikiiioqiyegyaak: cuumeogeomowqisc: $qieqyuyaicouukye = ManipulateArray::get($omauuckqmiemgegq, "\x74\157\157\x6c\163"); if (!is_array($qieqyuyaicouukye)) { goto csammceowmqwaamq; } foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $this->gocqaqicsamyaeqc((new HowToTool())->usuqmwksoeaayaig($scsoukmiqiescesc->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); qmkaeeomgkwggoyo: } gcckqucukawcasgk: csammceowmqwaamq: $asuggasaseaacmqu = ManipulateArray::get($omauuckqmiemgegq, "\163\164\x65\160\163"); if (!is_array($asuggasaseaacmqu)) { goto mkwkkmkgiqiamacc; } foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = ManipulateArray::get($wyeyeaaekyoyimqu, self::qescuiwgsyuikume); $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, "\x69\156\163\164\x72\x75\x63\x74\x69\x6f\156\163"); ++$momcykaoccoymeig; if (!($meqocwsecsywiiqs && is_array($mieuwqqskaueukye))) { goto sockeswygwcskeuq; } $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto cogywoqcqummsyus; } $mcqieaigyeeyaksm = Setting::ygyiswukccscuqmm(); cogywoqcqummsyus: $omayqgkqwmuqgugu->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if (!$imiasuqakwyyyemq instanceof Instruction) { goto uaukmuiwskcemcsw; } ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq("{$momcykaoccoymeig}\55{$wgywewwaswowuooi}"))); uaukmuiwskcemcsw: ugqwuugsweqgmywk: } gmwykkouysyaqwqm: $omayqgkqwmuqgugu->eyqkogeiqauioamw("{$this->ycqquoiyyuesegsy()}\43\x73\164\145\160{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig); $this->mgqggiyywoageqmo($omayqgkqwmuqgugu); sockeswygwcskeuq: eekcoeikaeaaeyii: } ocaguquugeamqckq: mkwkkmkgiqiamacc: uaqackioaiqwcocy: parent::__construct($goiqeyeaqmicqiky); } public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (is_array($this->ocqmggygciqgeuek())) { goto cscusseysqygsoiy; } $this->supply = []; cscusseysqygsoiy: $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (is_array($this->asgqmkcukouykiie())) { goto isgwkwacoyimiauk; } $this->tool = []; isgwkwacoyimiauk: $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (is_array($this->ouwekiquyskqewwi())) { goto mggeqkcksyaymcsa; } $this->step = []; mggeqkcksyaymcsa: $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
