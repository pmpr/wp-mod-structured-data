<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d71407851             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if ($this->id) { goto meawswgwagoqgkye; } $this->iaqckqwoiseyqaku(); meawswgwagoqgkye: return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\45\61\x24\x73\57\45\62\x24\x73\57"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if (!$owqaeesoaygymmcy) { goto wcesymwqykqoyuqk; } $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); wcesymwqykqoyuqk: if ($migiiksoiymissge) { goto usqgaogkqgemuima; } $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); usqgaogkqgemuima: $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { goto egasokooagakisiy; } if ($ccamueccusigaaio && is_string($ccamueccusigaaio)) { goto kecwuwwcwokuksyq; } goto mswsoaimesegiiic; egasokooagakisiy: $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, "\x75\163\x65\162", ManipulateUser::mwikyscisascoeea($ccamueccusigaaio, true)); goto mswsoaimesegiiic; kecwuwwcwokuksyq: $migiiksoiymissge .= "{$ccamueccusigaaio}\57"; mswsoaimesegiiic: if ($sqeykgyoooqysmca) { goto qgegkeomwscwwiuw; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); qgegkeomwscwwiuw: if (!$momcykaoccoymeig) { goto qmiwsequckckoaei; } $sqeykgyoooqysmca .= "\55{$momcykaoccoymeig}"; qmiwsequckckoaei: return $this->ggiaseqygioygumq("{$migiiksoiymissge}\43{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if ($this->type) { goto goeoymmqqqeeoime; } $this->aseocggwwegcmqes(ManipulateString::mkwcwqkqeqkqyggc($this)); goeoymmqqqeeoime: return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie !== null)) { goto eiawsoasmscmqswa; } $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; eiawsoasmscmqswa: return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if ($uomewyckeuqoqocu) { goto ickcmqoiosquugwe; } $uomewyckeuqoqocu = $this->kikmasogcikysciu(); ickcmqoiosquugwe: array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\x40\x63\157\x6e\x74\145\x78\164" => "\x68\164\x74\160\x3a\57\x2f\x73\x63\150\145\155\141\56\157\x72\147\x2f"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if (!$uomewyckeuqoqocu) { goto cuoqqgaygogsmmic; } if ($oomggoqacsumwqqu && strnatcmp(phpversion(), "\65\x2e\64\56\x30") >= 0) { goto qmeoaqmsuseueqiy; } $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); ygkcacsyyckescqs: cuoqqgaygogsmmic: return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\x40\x74\171\x70\145" => $this->gueasuouwqysmomu(), "\x40\151\144" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = ["\164\171\x70\145", "\x69\x64", "\x69\x73\107\x6c\157\x62\x61\x6c"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { goto ieumumsgyguceusy; } $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { goto qcessicwuikwqsis; } if ($eqgoocgaqwqcimie instanceof Thing) { goto kooskuwkuayiuose; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto qwcegcuowwgiccos; kooskuwkuayiuose: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); qwcegcuowwgiccos: goto yssscwioiyygssec; qcessicwuikwqsis: $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { goto eyiamcekkgkiawqy; } $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; goto twkmiuomimomscew; eyiamcekkgkiawqy: $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); twkmiuomimomscew: mqccmesakuemceqi: } igymseewwyiocoug: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; yssscwioiyygssec: ieumumsgyguceusy: sukskmcwsoysiuqu: } cgewcsueoyaeikgm: $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (!(strpos($eqgoocgaqwqcimie, "\x5f") !== false)) { goto coywmiyqgsweuiic; } $eqgoocgaqwqcimie = str_replace("\x5f", "\55", $eqgoocgaqwqcimie); coywmiyqgsweuiic: return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec(ManipulatePost::qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return ManipulatePost::squyiyimquqicqke("\143", $post, false); } public function osswsoymmgisqmoy($post = null) { return ManipulatePost::oukqamgqowciwoum("\143", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (empty($mkuwoiyskieqciqe)) { goto siqagquguiemuoku; } $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\120\45\144\x44\124\45\x64\110\45\x64\x4d\x25\144\x53", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); siqagquguiemuoku: return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (mb_detect_encoding($sociqikgoyemqaac, "\165\164\x66\55\70", true)) { goto ycakugokkqkuqyiu; } $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); ycakugokkqkuqyiu: return $sociqikgoyemqaac; } }
