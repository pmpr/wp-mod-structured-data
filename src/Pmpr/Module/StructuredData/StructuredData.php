<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cc00380239d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\MetaBox\MetaBox; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Setting\Tabs; class StructuredData extends Container { protected array $sections = []; public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\164\x72\x75\x63\x74\165\162\145\x64\x20\x44\x61\x74\141", PR__MDL__STRUCTURED_DATA); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto qicwaskssogcokgm; } parent::__construct(); $this->mgisqyswkkuceisu(["\x42\162\x61\156\144", "\127\x65\x62\x50\141\x67\145"]); if (!$this->sscegwueamckwmcy("\x68\141\163\137\150\x65\x61\x64\x65\162", true)) { goto kymkucucyeoeikim; } $this->kwkugmqouisgkqig("\127\x50\x48\145\141\x64\145\x72"); kymkucucyeoeikim: if (!$this->sscegwueamckwmcy("\150\141\163\137\x66\157\157\164\x65\x72", true)) { goto usquiuuyiyqaeyiu; } $this->kwkugmqouisgkqig("\x57\120\106\x6f\x6f\164\x65\x72"); usquiuuyiyqaeyiu: $this->iemaakgqgqosiecm(); qicwaskssogcokgm: } public function iemaakgqgqosiecm() { Tabs::symcgieuakksimmu(); MetaBox::symcgieuakksimmu(); } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { if (in_array($awcmekyiwwkeyisq, $this->suuogccckocgseyg())) { goto uguigkcmukuouway; } $this->sections[] = $awcmekyiwwkeyisq; uguigkcmukuouway: return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); esuiysskoweawsue: } uqqaiagaeqgqgaiy: return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\x61\144\144\137\163\x63\x68\x65\x6d\141", [$this, "\143\161\165\157\x6b\x6d\x65\x6d\145\153\x71\161\x79\167\147\x69"])->qcsmikeggeemccuu("\167\160\137\x66\x6f\157\164\x65\x72", [$this, "\143\161\165\157\153\x6d\x65\x6d\145\x6b\161\161\x79\x77\x67\x69"], 9999)->qcsmikeggeemccuu("\x70\154\165\x67\x69\156\x73\137\x6c\x6f\x61\144\145\144", [$this, "\x69\143\x77\x63\x67\x6d\x63\157\151\x6d\161\145\x69\x67\x79\x65"])->qcsmikeggeemccuu("\x77\160", [$this, "\x69\x6d\x79\x71\167\171\x79\x61\163\165\147\x71\153\x77\145\171"], 10, 1)->qcsmikeggeemccuu("\x61\144\x64\137\x73\143\x68\x65\x6d\141\137\142\x79\137\x74\x79\x70\145", [$this, "\x63\143\163\143\x79\x67\x6d\x79\x6d\161\163\x63\x63\155\x73\x73"], 10, 2)->qcsmikeggeemccuu("\x77\x70\x5f\x68\145\141\144", [$this, "\143\147\161\141\x71\x73\x65\x71\x6d\x71\143\165\153\163\157\163"], 100)->qcsmikeggeemccuu("\164\145\x6d\x70\154\x61\164\145\137\162\x65\x64\x69\162\145\x63\164", [$this, "\x67\x77\x65\151\171\155\x6b\163\151\155\167\x6b\167\165\x77\153"], 0)->qcsmikeggeemccuu("\141\x6d\x70\137\160\x6f\163\164\137\164\x65\x6d\160\154\x61\164\x65\137\x68\x65\x61\144", [$this, "\x63\165\167\x67\155\x63\x69\x67\157\167\151\145\141\x77\143\x71"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\141\155\160\x5f\x73\x63\150\145\155\x61\157\x72\147\137\x6d\145\x74\141\x64\x61\x74\141", "\x5f\137\x72\x65\x74\165\x72\156\137\146\x61\x6c\163\x65", 100)->cecaguuoecmccuse("\141\x6d\160\137\160\x6f\x73\x74\x5f\x74\145\x6d\x70\154\141\164\145\x5f\155\x65\164\141\x64\141\x74\141", "\x5f\x5f\162\x65\164\x75\162\x6e\x5f\x66\x61\154\x73\145", 100)->cecaguuoecmccuse("\167\x70\x73\x65\x6f\x5f\x6a\x73\x6f\156\x5f\154\x64\x5f\157\165\x74\x70\x75\164", "\137\137\162\145\x74\165\162\156\x5f\x65\x6d\160\x74\x79\137\x61\162\162\141\x79", 10, 1); parent::kgquecmsgcouyaya(); } public function init() { $this->waueiywackcqekak(); } public function ccscygmymqsccmss(?string $sqeykgyoooqysmca, ?array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = ManipulateString::kwuyaykukcmaqggg($sqeykgyoooqysmca); $post = ManipulateArray::get($ywmkwiwkosakssii, "\160\x6f\x73\164"); $aaqqkgyougeiueyq = null; $migiiksoiymissge = null; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\141\156\137\141\144\144"), true))) { goto skkamseieeusycye; } switch ($sqeykgyoooqysmca) { case "\141\x67\x67\x72\145\147\141\164\145\x5f\x72\x61\x74\x69\x6e\147": $qqyuqswckkcomeak = ManipulateArray::get($ywmkwiwkosakssii, "\x72\141\164\x69\x6e\x67", []); if (!ManipulateArray::get($qqyuqswckkcomeak, "\143\x6f\165\x6e\164", 0)) { goto suqkuqygkkgwyaie; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $uwaosokcmcicugmi = (new Course(false))->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($post))->gucwmccyimoagwcm(ManipulatePost::masoymaamekuykso($post))->oaqksmcekisgaqqw(new Organization()); $uwaosokcmcicugmi->iaqckqwoiseyqaku($uwaosokcmcicugmi->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); $aaqqkgyougeiueyq = (new AggregateRating($qqyuqswckkcomeak))->mwyyceoeyyyqsiou($uwaosokcmcicugmi); suqkuqygkkgwyaie: goto gaomwagkcciesyqy; } aegysmeecgcgayyw: gaomwagkcciesyqy: if (!$aaqqkgyougeiueyq) { goto wiysogeqqwgioyka; } if (!$migiiksoiymissge) { goto soaccwqimeksgwiw; } $aaqqkgyougeiueyq->iaqckqwoiseyqaku($aaqqkgyougeiueyq->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); soaccwqimeksgwiw: $this->render($aaqqkgyougeiueyq); wiysogeqqwgioyka: skkamseieeusycye: } public function icwcgmcoimqeigye() { if (!($wpSeo = ManipulateSetting::cmaecekuqkwmemms("\127\x50\123\105\x4f\x5f\126\105\122\123\x49\117\x4e"))) { goto giaacoqqqsekcayy; } if (version_compare($wpSeo, "\61\x31\56\60", "\74")) { goto cgiscsqwwgqqaeqi; } $this->cecaguuoecmccuse("\x77\160\x73\x65\157\x5f\163\x63\x68\x65\155\141\137\x67\x72\141\x70\x68\x5f\160\x69\x65\x63\145\163", [$this, "\x71\x65\x71\161\x61\147\x67\x6d\145\x6d\143\x75\x69\145\x79\x71"], 10, 2); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->cecaguuoecmccuse("\x77\160\x73\145\157\x5f\x6a\x73\157\156\x5f\154\144\137\157\165\x74\x70\165\x74", [$this, "\x75\151\143\x67\145\x77\143\153\x69\x61\x61\x61\157\x75\x63\x77"], 10, 2)->cecaguuoecmccuse("\x77\x70\163\x65\x6f\137\152\x73\157\x6e\x5f\x6c\x64\137\x6f\x75\164\x70\x75\x74", [$this, "\x77\x77\165\x67\163\163\171\161\x71\x67\141\163\141\163\141\141"], 10, 2); syiqkaasoueowwui: giaacoqqqsekcayy: } public function waueiywackcqekak() { $auqoykcmsiauccao = ManipulateServer::get("\x55\x52\114"); $aiamqeawckcsuaou = ManipulateServer::get("\x41\x63\x74\151\157\156"); if (!($auqoykcmsiauccao && $aiamqeawckcsuaou == "\110\123\x44\x65\154\x65\x74\145\x4d\x61\x72\x6b\165\160\x43\141\143\x68\145")) { goto ewymsmkkiksgwysk; } delete_transient("\110\165\x6e\143\150\x53\143\150\x65\x6d\x61\55\x4d\x61\x72\153\165\x70\x2d" . md5($auqoykcmsiauccao)); header("\110\124\124\x50\57\61\x2e\60\x20\x32\x30\62\x20\101\x63\143\x65\160\x74\145\144", true, 202); exit; ewymsmkkiksgwysk: } public function cquokmemekqqywgi($qscuacuysiqsossk = false) { global $post; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x61\x6e\137\141\144\x64"), true))) { goto wgewmqieuamsoayy; } $myikwgwgeaymgysa = is_singular() ? ManipulatePost::igawqaomowicuayw("\x5f\x48\165\156\143\150\123\x63\x68\x65\155\x61\104\151\163\x61\x62\154\x65\x4d\x61\x72\x6b\x75\x70", $post, true) : false; if ($myikwgwgeaymgysa) { goto ugqaaewwmkocwwgy; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post); $this->kwkugmqouisgkqig($sqeykgyoooqysmca); foreach ($this->suuogccckocgseyg() as $awcmekyiwwkeyisq) { $ycemioygiseosgqi = Factory::symcgieuakksimmu()->create($awcmekyiwwkeyisq); $ugugagoguiycqeys = ManipulatePost::igawqaomowicuayw("\x5f\110\x75\x6e\143\x68\x53\143\x68\145\x6d\141\x4d\x61\x72\x6b\x75\160", $post); if ($ugugagoguiycqeys) { goto igooksugieceoege; } if (!$ycemioygiseosgqi) { goto cewmoqyysgsmuiya; } if (is_array($ycemioygiseosgqi)) { goto egyyiccaeeiooaua; } $this->render($ycemioygiseosgqi, $qscuacuysiqsossk); goto scisgsyemmsekgos; egyyiccaeeiooaua: foreach ($ycemioygiseosgqi as $cckmquusswcwquse) { $this->render($cckmquusswcwquse, $qscuacuysiqsossk); ooeausyowguqicuo: } gkyawqqcmigqgaiq: scisgsyemmsekgos: cewmoqyysgsmuiya: goto omqiayeucoioqoao; igooksugieceoege: $this->render($ugugagoguiycqeys, $qscuacuysiqsossk); omqiayeucoioqoao: wmywuusgukmmaams: } cmegwsegsosyqcai: ugqaaewwmkocwwgy: wgewmqieuamsoayy: } public function render($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto kqgcyoscsusgoaqi; } $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], ManipulateSetting::esoowymaimwcuecq()); kqgcyoscsusgoaqi: if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto wkeuuycukmuqiaom; } if ($qscuacuysiqsossk) { goto ueigkucgaucgeimc; } ManipulateHTML::awwqwouuoioauoaw("\x73\x63\x72\x69\160\164", ["\164\171\x70\145" => self::amgecouwceeaomww], true, "{$aaqqkgyougeiueyq}\12"); goto sggawugoykqcmsug; ueigkucgaucgeimc: $mymggmkssycumueo[] = json_decode($aaqqkgyougeiueyq, true); sggawugoykqcmsug: wkeuuycukmuqiaom: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto mwsmsguqqkcwiiuk; } if (!(count($mymggmkssycumueo) == 1)) { goto wakmayaoqoskekqy; } $mymggmkssycumueo = reset($mymggmkssycumueo); wakmayaoqoskekqy: if (ManipulateSetting::esoowymaimwcuecq()) { goto qmuwoecuacmkwgem; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto owmuceyswmgueasi; qmuwoecuacmkwgem: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; owmuceyswmgueasi: print json_encode($mymggmkssycumueo, $qiouiwasaauyaaue); mwsmsguqqkcwiiuk: } public function imyqwyyasugqkwey($wp) { $iwceggomkwsaekmg = ManipulateServer::gmsemuiwicucmcok("\101\x63\143\x65\x70\x74"); $saqmwwmqiwmkiwaa = ManipulateServer::get("\x66\157\x72\155\141\x74"); if (!($saqmwwmqiwmkiwaa === "\x61\160\160\154\151\143\141\164\x69\157\156\x2f\154\144\40\152\163\157\156" || $iwceggomkwsaekmg === self::amgecouwceeaomww)) { goto eeauyscekuckoues; } $this->cquokmemekqqywgi(true); exit; eeauyscekuckoues: } public function cgqaqseqmqcuksos() { ManipulateHTML::awwqwouuoioauoaw("\154\151\156\x6b", ["\162\x65\x6c" => "\x61\x6c\x74\145\x72\x6e\141\x74\145", "\164\171\x70\145" => self::amgecouwceeaomww, "\x68\162\x65\x66" => $this->ycqquoiyyuesegsy() . "\x3f\146\157\x72\155\x61\x74\x3d" . self::amgecouwceeaomww, "\164\x69\x74\x6c\x65" => __("\x53\164\x72\x75\143\x74\x75\162\x65\x64\x20\104\145\163\x63\x72\151\x70\164\x6f\x72\x20\x44\x6f\143\x75\x6d\145\x6e\x74\40\x28\112\123\x4f\116\x2d\114\x44\40\146\157\x72\155\141\x74\x29", PR__MDL__STRUCTURED_DATA)]); } public function gweiymksimwkwuwk() { ob_start([$this, "\x6d\x63\161\x67\161\x61\x6f\155\171\x63\155\145\x6f\x6d\x79\x79"]); } public function mcqgqaomycmeomyy($gqykqygqmiosgqmg) { $gqykqygqmiosgqmg = preg_replace("\57\x5b\x5c\x73\x5c\x6e\135\x2a\74\x28\154\x69\x6e\153\174\x6d\x65\x74\x61\x29\50\134\163\174\x5b\x5e\76\135\x2b\134\x73\x29\151\164\145\x6d\x70\162\x6f\x70\75\133\x27\x22\135\x5b\x5e\x27\x22\135\x2a\x5b\47\x22\x5d\133\136\x3e\x5d\x2a\76\133\134\x73\x5c\x6e\135\x2a\x2f\151\x6d\x53", '', $gqykqygqmiosgqmg); $fmwiggygsiguaaec = 1; wagqgeqymeqoeuyi: if (!($fmwiggygsiguaaec <= 6)) { goto eogwckcymuugikuy; } $gqykqygqmiosgqmg = preg_replace("\57\x28\x3c\x5b\x5e\x3e\135\52\x29\x5c\163\151\x74\145\x6d\50\x73\143\x6f\x70\x65\x7c\164\171\160\x65\174\160\162\157\160\x29\50\75\133\47\42\x5d\133\136\47\x22\135\52\x5b\x27\42\135\51\x3f\x28\x5b\x5e\x3e\x5d\52\76\x29\x2f\x69\x6d\x53", "\x24\x31\44\64", $gqykqygqmiosgqmg); msemumccgceyugmg: $fmwiggygsiguaaec++; goto wagqgeqymeqoeuyi; eogwckcymuugikuy: return $gqykqygqmiosgqmg; } public function uicgewckiaaaoucw($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!in_array($mgkceomocowocqyo, ["\x77\145\142\163\151\164\145", "\x63\x6f\x6d\x70\141\x6e\x79", "\x70\145\162\x73\157\x6e", "\142\x72\145\141\144\143\162\x75\155\x62"])) { goto qoqskyuuwueqkquk; } return []; qoqskyuuwueqkquk: return $icwicymcioeyeyek; } public function wwugssyqqgasasaa($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!($mgkceomocowocqyo == "\142\162\145\141\144\x63\162\165\x6d\142")) { goto iwsuawwqomaowuii; } return []; iwsuawwqomaowuii: return $icwicymcioeyeyek; } public function qeqqaggmemcuieyq($aocwauauqiooioeq, $mgkceomocowocqyo) { $aocwauauqiooioeq = []; return $aocwauauqiooioeq; } public function cuwgmcigowieawcq($qqscaoyqikuyeoaw) { $this->cquokmemekqqywgi(false); } }
