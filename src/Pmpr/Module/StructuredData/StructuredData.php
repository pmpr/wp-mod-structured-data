<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce19634828d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\MetaBox\MetaBox; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Setting\Tabs; class StructuredData extends Container { protected array $sections = []; public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\164\x72\165\x63\x74\165\162\145\x64\40\x44\141\164\x61", PR__MDL__STRUCTURED_DATA); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto qicwaskssogcokgm; } parent::__construct(); $this->mgisqyswkkuceisu(["\x42\162\x61\156\144", "\127\x65\142\x50\141\x67\x65"]); if (!$this->sscegwueamckwmcy("\x68\x61\163\x5f\x68\x65\x61\144\145\162", true)) { goto kymkucucyeoeikim; } $this->kwkugmqouisgkqig("\x57\x50\x48\145\141\144\145\162"); kymkucucyeoeikim: if (!$this->sscegwueamckwmcy("\150\x61\163\137\146\157\157\164\145\x72", true)) { goto usquiuuyiyqaeyiu; } $this->kwkugmqouisgkqig("\127\120\106\157\157\164\145\162"); usquiuuyiyqaeyiu: $this->iemaakgqgqosiecm(); qicwaskssogcokgm: } public function iemaakgqgqosiecm() { Tabs::symcgieuakksimmu(); MetaBox::symcgieuakksimmu(); } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { if (in_array($awcmekyiwwkeyisq, $this->suuogccckocgseyg())) { goto uguigkcmukuouway; } $this->sections[] = $awcmekyiwwkeyisq; uguigkcmukuouway: return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); esuiysskoweawsue: } uqqaiagaeqgqgaiy: return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\x61\x64\144\x5f\163\x63\150\145\x6d\141", [$this, "\143\x71\x75\157\x6b\x6d\145\x6d\x65\x6b\x71\x71\171\167\x67\151"])->qcsmikeggeemccuu("\167\160\137\146\157\x6f\164\x65\x72", [$this, "\143\161\x75\157\x6b\x6d\145\x6d\145\x6b\161\161\171\167\x67\151"], 9999)->qcsmikeggeemccuu("\x70\154\165\147\151\x6e\163\137\x6c\x6f\141\144\145\144", [$this, "\151\143\167\x63\x67\x6d\x63\x6f\151\x6d\161\145\151\147\171\x65"])->qcsmikeggeemccuu("\167\160", [$this, "\151\155\x79\161\167\171\x79\141\x73\x75\147\x71\x6b\x77\x65\x79"], 10, 1)->qcsmikeggeemccuu("\x61\x64\x64\137\x73\x63\150\x65\155\141\x5f\142\171\x5f\164\171\x70\145", [$this, "\143\143\x73\x63\x79\147\155\x79\155\x71\x73\143\143\155\x73\x73"], 10, 2)->qcsmikeggeemccuu("\167\160\137\x68\x65\x61\x64", [$this, "\x63\147\x71\x61\161\x73\145\161\155\x71\x63\x75\153\163\157\x73"], 100)->qcsmikeggeemccuu("\x74\145\155\x70\x6c\x61\164\x65\x5f\x72\145\x64\x69\x72\145\143\x74", [$this, "\x67\167\145\x69\x79\155\153\163\x69\x6d\167\x6b\x77\165\167\x6b"], 0)->qcsmikeggeemccuu("\x61\x6d\x70\x5f\160\x6f\x73\x74\x5f\x74\145\x6d\x70\x6c\141\x74\145\137\150\145\141\x64", [$this, "\143\x75\x77\x67\155\x63\x69\147\x6f\167\x69\x65\x61\x77\x63\x71"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\141\x6d\160\137\x73\x63\150\x65\x6d\x61\157\162\147\x5f\155\145\x74\x61\144\141\164\141", "\137\137\162\145\x74\165\x72\156\137\x66\141\x6c\x73\x65", 100)->cecaguuoecmccuse("\141\x6d\160\x5f\x70\x6f\x73\x74\x5f\x74\145\155\x70\x6c\141\164\145\137\155\145\x74\141\144\141\x74\141", "\x5f\137\x72\x65\164\165\162\x6e\137\x66\141\154\163\x65", 100)->cecaguuoecmccuse("\167\x70\163\x65\x6f\137\x6a\x73\x6f\x6e\137\154\x64\x5f\x6f\165\x74\160\165\x74", "\x5f\x5f\x72\x65\164\x75\162\156\x5f\145\155\x70\x74\171\137\141\x72\x72\141\171", 10, 1); parent::kgquecmsgcouyaya(); } public function init() { $this->waueiywackcqekak(); } public function ccscygmymqsccmss(?string $sqeykgyoooqysmca, ?array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = ManipulateString::kwuyaykukcmaqggg($sqeykgyoooqysmca); $post = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x6f\163\164"); $aaqqkgyougeiueyq = null; $migiiksoiymissge = null; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\141\x6e\137\141\144\x64"), true))) { goto skkamseieeusycye; } switch ($sqeykgyoooqysmca) { case "\x61\147\147\x72\145\147\x61\164\x65\137\162\x61\x74\x69\156\147": $qqyuqswckkcomeak = ManipulateArray::get($ywmkwiwkosakssii, "\x72\x61\164\x69\x6e\x67", []); if (!ManipulateArray::get($qqyuqswckkcomeak, "\x63\x6f\165\156\x74", 0)) { goto suqkuqygkkgwyaie; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $uwaosokcmcicugmi = (new Course(false))->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($post))->gucwmccyimoagwcm(ManipulatePost::masoymaamekuykso($post))->oaqksmcekisgaqqw(new Organization()); $uwaosokcmcicugmi->iaqckqwoiseyqaku($uwaosokcmcicugmi->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); $aaqqkgyougeiueyq = (new AggregateRating($qqyuqswckkcomeak))->mwyyceoeyyyqsiou($uwaosokcmcicugmi); suqkuqygkkgwyaie: goto gaomwagkcciesyqy; } aegysmeecgcgayyw: gaomwagkcciesyqy: if (!$aaqqkgyougeiueyq) { goto wiysogeqqwgioyka; } if (!$migiiksoiymissge) { goto soaccwqimeksgwiw; } $aaqqkgyougeiueyq->iaqckqwoiseyqaku($aaqqkgyougeiueyq->cyamgsaeyiqasmcc()->qmueseocuuekommo($migiiksoiymissge)); soaccwqimeksgwiw: $this->render($aaqqkgyougeiueyq); wiysogeqqwgioyka: skkamseieeusycye: } public function icwcgmcoimqeigye() { if (!($wpSeo = ManipulateSetting::cmaecekuqkwmemms("\x57\x50\x53\x45\117\x5f\126\x45\x52\123\111\x4f\116"))) { goto giaacoqqqsekcayy; } if (version_compare($wpSeo, "\x31\61\x2e\x30", "\74")) { goto cgiscsqwwgqqaeqi; } $this->cecaguuoecmccuse("\167\x70\163\145\157\137\x73\143\150\145\155\141\137\147\x72\141\x70\x68\x5f\160\x69\145\x63\145\x73", [$this, "\x71\145\x71\161\141\147\147\x6d\145\x6d\143\x75\x69\145\x79\x71"], 10, 2); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->cecaguuoecmccuse("\167\160\163\x65\x6f\x5f\x6a\x73\x6f\156\137\x6c\144\x5f\157\165\x74\x70\165\164", [$this, "\165\x69\x63\x67\x65\x77\143\x6b\x69\141\141\x61\x6f\165\x63\x77"], 10, 2)->cecaguuoecmccuse("\167\160\x73\x65\x6f\x5f\152\163\157\x6e\137\x6c\x64\137\157\x75\164\160\x75\x74", [$this, "\167\167\x75\147\163\163\x79\x71\161\x67\141\163\141\x73\141\x61"], 10, 2); syiqkaasoueowwui: giaacoqqqsekcayy: } public function waueiywackcqekak() { $auqoykcmsiauccao = ManipulateServer::get("\125\x52\x4c"); $aiamqeawckcsuaou = ManipulateServer::get("\x41\x63\x74\151\157\x6e"); if (!($auqoykcmsiauccao && $aiamqeawckcsuaou == "\x48\x53\104\145\154\x65\164\x65\x4d\x61\x72\x6b\x75\160\103\141\143\x68\x65")) { goto ewymsmkkiksgwysk; } delete_transient("\x48\x75\156\x63\x68\x53\143\150\x65\155\141\x2d\x4d\x61\162\153\165\160\55" . md5($auqoykcmsiauccao)); header("\110\x54\124\120\57\x31\x2e\60\40\62\x30\62\40\x41\143\x63\x65\x70\164\x65\x64", true, 202); exit; ewymsmkkiksgwysk: } public function cquokmemekqqywgi($qscuacuysiqsossk = false) { global $post; if (!($post && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x61\x6e\137\141\144\144"), true))) { goto wgewmqieuamsoayy; } $myikwgwgeaymgysa = is_singular() ? ManipulatePost::igawqaomowicuayw("\x5f\110\x75\x6e\143\x68\x53\x63\x68\x65\x6d\141\104\151\163\141\x62\x6c\x65\x4d\x61\x72\153\165\160", $post, true) : false; if ($myikwgwgeaymgysa) { goto ugqaaewwmkocwwgy; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post); $this->kwkugmqouisgkqig($sqeykgyoooqysmca); foreach ($this->suuogccckocgseyg() as $awcmekyiwwkeyisq) { $ycemioygiseosgqi = Factory::symcgieuakksimmu()->create($awcmekyiwwkeyisq); $ugugagoguiycqeys = ManipulatePost::igawqaomowicuayw("\x5f\110\165\x6e\143\x68\123\143\x68\145\155\x61\x4d\141\162\x6b\165\160", $post); if ($ugugagoguiycqeys) { goto igooksugieceoege; } if (!$ycemioygiseosgqi) { goto cewmoqyysgsmuiya; } if (is_array($ycemioygiseosgqi)) { goto egyyiccaeeiooaua; } $this->render($ycemioygiseosgqi, $qscuacuysiqsossk); goto scisgsyemmsekgos; egyyiccaeeiooaua: foreach ($ycemioygiseosgqi as $cckmquusswcwquse) { $this->render($cckmquusswcwquse, $qscuacuysiqsossk); ooeausyowguqicuo: } gkyawqqcmigqgaiq: scisgsyemmsekgos: cewmoqyysgsmuiya: goto omqiayeucoioqoao; igooksugieceoege: $this->render($ugugagoguiycqeys, $qscuacuysiqsossk); omqiayeucoioqoao: wmywuusgukmmaams: } cmegwsegsosyqcai: ugqaaewwmkocwwgy: wgewmqieuamsoayy: } public function render($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto kqgcyoscsusgoaqi; } $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], ManipulateSetting::esoowymaimwcuecq()); kqgcyoscsusgoaqi: if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto wkeuuycukmuqiaom; } if ($qscuacuysiqsossk) { goto ueigkucgaucgeimc; } ManipulateHTML::awwqwouuoioauoaw("\163\x63\x72\151\x70\x74", ["\164\171\x70\145" => self::amgecouwceeaomww], true, "{$aaqqkgyougeiueyq}\xa"); goto sggawugoykqcmsug; ueigkucgaucgeimc: $mymggmkssycumueo[] = json_decode($aaqqkgyougeiueyq, true); sggawugoykqcmsug: wkeuuycukmuqiaom: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto mwsmsguqqkcwiiuk; } if (!(count($mymggmkssycumueo) == 1)) { goto wakmayaoqoskekqy; } $mymggmkssycumueo = reset($mymggmkssycumueo); wakmayaoqoskekqy: if (ManipulateSetting::esoowymaimwcuecq()) { goto qmuwoecuacmkwgem; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto owmuceyswmgueasi; qmuwoecuacmkwgem: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; owmuceyswmgueasi: print json_encode($mymggmkssycumueo, $qiouiwasaauyaaue); mwsmsguqqkcwiiuk: } public function imyqwyyasugqkwey($wp) { $iwceggomkwsaekmg = ManipulateServer::gmsemuiwicucmcok("\101\143\x63\145\160\164"); $saqmwwmqiwmkiwaa = ManipulateServer::get("\146\x6f\x72\x6d\141\x74"); if (!($saqmwwmqiwmkiwaa === "\x61\x70\x70\154\151\143\141\x74\151\x6f\156\x2f\154\x64\x20\x6a\163\x6f\156" || $iwceggomkwsaekmg === self::amgecouwceeaomww)) { goto eeauyscekuckoues; } $this->cquokmemekqqywgi(true); exit; eeauyscekuckoues: } public function cgqaqseqmqcuksos() { ManipulateHTML::awwqwouuoioauoaw("\x6c\151\156\153", ["\162\x65\x6c" => "\141\x6c\164\x65\x72\156\x61\164\145", "\164\171\x70\x65" => self::amgecouwceeaomww, "\x68\x72\145\x66" => DecoratorQuery::yqymaqmqiqmmmsoo([self::yqemseykugmsyeqa => self::amgecouwceeaomww], $this->ycqquoiyyuesegsy()), "\164\151\164\x6c\145" => __("\123\x74\162\x75\143\164\x75\x72\x65\x64\x20\x44\145\163\143\x72\x69\160\x74\x6f\162\40\x44\157\143\165\x6d\x65\156\164\x20\50\112\123\x4f\x4e\55\x4c\104\40\x66\x6f\162\155\141\164\x29", PR__MDL__STRUCTURED_DATA)]); } public function gweiymksimwkwuwk() { ob_start([$this, "\x6d\x63\161\147\x71\141\157\x6d\171\143\155\145\x6f\x6d\171\x79"]); } public function mcqgqaomycmeomyy($gqykqygqmiosgqmg) { $gqykqygqmiosgqmg = preg_replace("\x2f\133\x5c\163\134\x6e\x5d\52\74\x28\154\151\x6e\153\174\x6d\x65\164\141\x29\x28\x5c\163\x7c\133\x5e\x3e\x5d\53\134\163\x29\151\164\145\x6d\x70\x72\157\160\75\x5b\47\x22\x5d\x5b\136\x27\x22\x5d\52\133\x27\x22\135\x5b\x5e\76\135\52\x3e\x5b\134\163\x5c\x6e\x5d\x2a\x2f\151\x6d\x53", '', $gqykqygqmiosgqmg); $fmwiggygsiguaaec = 1; wagqgeqymeqoeuyi: if (!($fmwiggygsiguaaec <= 6)) { goto eogwckcymuugikuy; } $gqykqygqmiosgqmg = preg_replace("\x2f\50\74\x5b\136\x3e\x5d\x2a\51\x5c\163\151\x74\145\x6d\50\x73\143\157\x70\x65\174\x74\171\x70\145\174\160\x72\157\x70\51\50\75\133\47\x22\x5d\133\x5e\47\x22\135\x2a\x5b\47\x22\x5d\51\77\50\133\x5e\x3e\x5d\52\76\x29\57\x69\155\123", "\x24\x31\44\64", $gqykqygqmiosgqmg); msemumccgceyugmg: $fmwiggygsiguaaec++; goto wagqgeqymeqoeuyi; eogwckcymuugikuy: return $gqykqygqmiosgqmg; } public function uicgewckiaaaoucw($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!in_array($mgkceomocowocqyo, ["\x77\145\x62\x73\x69\164\145", "\143\157\x6d\x70\141\x6e\171", "\160\145\162\163\157\156", "\142\x72\145\141\144\x63\x72\165\x6d\x62"])) { goto qoqskyuuwueqkquk; } return []; qoqskyuuwueqkquk: return $icwicymcioeyeyek; } public function wwugssyqqgasasaa($icwicymcioeyeyek, $mgkceomocowocqyo) { if (!($mgkceomocowocqyo == "\x62\162\145\x61\x64\x63\x72\165\155\x62")) { goto iwsuawwqomaowuii; } return []; iwsuawwqomaowuii: return $icwicymcioeyeyek; } public function qeqqaggmemcuieyq($aocwauauqiooioeq, $mgkceomocowocqyo) { $aocwauauqiooioeq = []; return $aocwauauqiooioeq; } public function cuwgmcigowieawcq($qqscaoyqikuyeoaw) { $this->cquokmemekqqywgi(false); } }
