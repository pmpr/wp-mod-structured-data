<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cfed099d889             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto kqqiegkuqagcqsya; } if ($ccamueccusigaaio instanceof WP_User) { goto guykyqecgswcsmws; } if (DecoratorAttachment::qecqsmowoqmwgagu($ccamueccusigaaio)) { goto mugqyyeayeyggqqk; } $aiooqyausygaasqm = ManipulatePost::wsiiswmaagmyiaiw($ccamueccusigaaio); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $aiooqyausygaasqm = $ccamueccusigaaio; acsqgiuageaasiyy: if ($aiooqyausygaasqm) { goto samwkqgwouggsguc; } if ($ewgwqamkygiqaawc = ManipulatePost::souwykwwmyygqyqi($ccamueccusigaaio)) { goto wyuemgggaqogsmsq; } goto oomguqikqokqwgku; samwkqgwouggsguc: $this->omsioukysssesasy($aiooqyausygaasqm); goto oomguqikqokqwgku; wyuemgggaqogsmsq: $wwgucssaecqekuek = DOMCrawler::ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\151\x6d\x67"); $this->omsioukysssesasy([ManipulateArray::get($wwgucssaecqekuek, "\x73\x72\143"), ManipulateArray::get($wwgucssaecqekuek, "\x77\x69\144\x74\x68"), ManipulateArray::get($wwgucssaecqekuek, "\x68\x65\x69\147\x68\164")]); oomguqikqokqwgku: goto kkumywowcoycymeo; guykyqecgswcsmws: $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = DecoratorUser::aeymcyaqkmmukomc(DecoratorAuthor::igawqaomowicuayw("\165\x73\x65\x72\x5f\x65\155\x61\x69\154", $ccamueccusigaaio), [self::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; kkumywowcoycymeo: if ($this->suegwaomueaiseeo()) { goto miweggwqeiaeweia; } $aiooqyausygaasqm = $this->sscegwueamckwmcy("\x67\x65\164\137\151\x6d\141\x67\x65\x5f\x70\x6c\x61\143\145\x68\157\x6c\x64\145\162\137\151\x64", ''); $this->omsioukysssesasy($aiooqyausygaasqm); miweggwqeiaeweia: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); kqqiegkuqagcqsya: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto aomysykcgikegiau; } if (!is_array($aiooqyausygaasqm)) { goto ogsaaqsaogcqiouy; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $mcqieaigyeeyaksm = ManipulateAttachment::uikkssqcoewckces($aiooqyausygaasqm, "\146\x75\x6c\x6c"); if ($mcqieaigyeeyaksm) { goto ousiuuwgwkiyikyq; } $mcqieaigyeeyaksm = ManipulateAttachment::uikkssqcoewckces($this->sscegwueamckwmcy("\147\145\164\137\151\x6d\x61\x67\x65\x5f\160\x6c\141\143\145\150\x6f\154\144\x65\162\x5f\x69\x64", 0), "\146\165\154\x6c"); ousiuuwgwkiyikyq: iwekmyyccgiyuecc: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto ikqqskkqqwmwssoo; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; ikqqskkqqwmwssoo: $aiooqyausygaasqm = ManipulatePost::get($aiooqyausygaasqm); $this->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm)); aomysykcgikegiau: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
