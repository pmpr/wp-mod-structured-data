<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f4651a433             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto gamqcwuwkikwqoay; } if ($ccamueccusigaaio instanceof WP_User) { goto sioekkmekwygemyc; } if ($ccamueccusigaaio instanceof WP_Term) { goto uimeeckqksqeekqq; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto ucqmumuygcywwqma; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto uykousayyomcaeaa; ucqmumuygcywwqma: $aiooqyausygaasqm = $ccamueccusigaaio; uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); iuuuususuuuaieem: if ($aiooqyausygaasqm) { goto uqokiksoqcwwqgio; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto qukocuwgakemmyga; } goto kocqqoyymosmuksu; uqokiksoqcwwqgio: $this->omsioukysssesasy($aiooqyausygaasqm); goto kocqqoyymosmuksu; qukocuwgakemmyga: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\151\155\147"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\163\162\143"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x77\151\x64\x74\x68"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x68\145\151\147\x68\164")]); kocqqoyymosmuksu: goto yiowgigkkwsoqcci; sioekkmekwygemyc: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(self::akoagooquksouwka, $ccamueccusigaaio), [self::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; yiowgigkkwsoqcci: if ($this->suegwaomueaiseeo()) { goto ieqesiiageaauiuw; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\x67\x65\164\137\151\x6d\x61\147\145\x5f\x70\154\141\143\x65\x68\x6f\x6c\144\x65\x72\x5f\151\144", ''); $this->omsioukysssesasy($aiooqyausygaasqm); ieqesiiageaauiuw: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); gamqcwuwkikwqoay: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto mogkoocsoeuyoqqa; } if (!is_array($aiooqyausygaasqm)) { goto oyeyomcgkmgymogq; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\x66\x75\x6c\x6c"); if ($mcqieaigyeeyaksm) { goto mscyggqcesgqqksu; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\x67\x65\x74\137\x69\x6d\141\x67\x65\x5f\x70\154\x61\x63\x65\150\x6f\154\x64\x65\162\x5f\x69\144", 0), "\x66\165\154\x6c"); mscyggqcesgqqksu: iesekaeqeomeuaui: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto wsesqmcqoiyyqkqi; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; wsesqmcqoiyyqkqi: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); mogkoocsoeuyoqqa: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
