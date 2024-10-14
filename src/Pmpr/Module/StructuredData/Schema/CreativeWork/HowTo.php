<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b4be803a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function __construct($omauuckqmiemgegq = [], $goiqeyeaqmicqiky = true) { if ($omauuckqmiemgegq) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->usuqmwksoeaayaig($gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::qescuiwgsyuikume))->gucwmccyimoagwcm($gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::eqkeooqcsscoggia)); if ($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, Constants::mkousmkiawwousws)) { $this->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); } $imeywacwecgemcco = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x63\157\163\x74"); $wwigiesyquoeawog = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x63\165\162\x72\145\x6e\x63\x79"); if ($wwigiesyquoeawog && $imeywacwecgemcco) { $this->ecqgemyswuaswooa((new MonetaryAmount())->iygyugseyaqwywyg($imeywacwecgemcco)->yakomucykaieeiqq($wwigiesyquoeawog)); } $sieqmaaeyogyamwk = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\x74\157\164\x61\154\x54\151\155\x65"); if ($sieqmaaeyogyamwk) { $this->oguioqiqyaioiuca(strtoupper($sieqmaaeyogyamwk)); } $yeiuicqomkekqeck = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\163\x75\x70\160\154\x69\x65\163"); if (is_array($yeiuicqomkekqeck)) { foreach ($yeiuicqomkekqeck as $momcykaoccoymeig => $egcsuueoacmkqwgy) { ++$momcykaoccoymeig; $this->gquekoigiqqkwiym((new HowToSupply())->usuqmwksoeaayaig($egcsuueoacmkqwgy->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); } } $qieqyuyaicouukye = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\164\157\x6f\x6c\x73"); if (is_array($qieqyuyaicouukye)) { foreach ($qieqyuyaicouukye as $momcykaoccoymeig => $scsoukmiqiescesc) { ++$momcykaoccoymeig; $this->gocqaqicsamyaeqc((new HowToTool())->usuqmwksoeaayaig($scsoukmiqiescesc->name)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig)); } } $asuggasaseaacmqu = $gkyciwoiiisgywcs->get($omauuckqmiemgegq, "\163\x74\145\160\163"); if (is_array($asuggasaseaacmqu)) { foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, Constants::qescuiwgsyuikume); $mieuwqqskaueukye = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, "\x69\x6e\163\164\x72\165\x63\x74\151\157\156\x73"); ++$momcykaoccoymeig; if ($meqocwsecsywiiqs && is_array($mieuwqqskaueukye)) { $omayqgkqwmuqgugu = new HowToStep(); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($wyeyeaaekyoyimqu, Constants::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { $mcqieaigyeeyaksm = Setting::symcgieuakksimmu()->ygyiswukccscuqmm(); } $omayqgkqwmuqgugu->mwiamauscyiwogsu(new ImageObject($mcqieaigyeeyaksm)); foreach ($mieuwqqskaueukye as $wgywewwaswowuooi => $imiasuqakwyyyemq) { if ($imiasuqakwyyyemq instanceof Instruction) { ++$wgywewwaswowuooi; $omayqgkqwmuqgugu->asssmuisouigmaom($imiasuqakwyyyemq->uqeoyqiwywwmsiew()->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq("{$momcykaoccoymeig}\x2d{$wgywewwaswowuooi}"))); } } $omayqgkqwmuqgugu->eyqkogeiqauioamw("{$this->ycqquoiyyuesegsy()}\43\x73\164\145\x70{$momcykaoccoymeig}")->usuqmwksoeaayaig($meqocwsecsywiiqs)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($momcykaoccoymeig))->weakiuagguweamee($momcykaoccoymeig); $this->mgqggiyywoageqmo($omayqgkqwmuqgugu); } } } } parent::__construct($goiqeyeaqmicqiky); } public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (!is_array($this->ocqmggygciqgeuek())) { $this->supply = []; } $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (!is_array($this->asgqmkcukouykiie())) { $this->tool = []; } $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (!is_array($this->ouwekiquyskqewwi())) { $this->step = []; } $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
