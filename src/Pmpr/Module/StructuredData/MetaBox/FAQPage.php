<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275d41bdc68             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\StructuredData\Setting\Setting; class FAQPage extends Tab { const sqgaeeagsegecugi = "\146\141\161\x5f\155\x61\x69\x6e\x5f\x65\x6e\164\x69\x74\x79"; const kuygeqomywoykkai = "\x71\165\145\163\164\151\x6f\x6e"; const eeiymeksiysiuemu = "\x61\x6e\163\x77\145\x72"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto mqccmesakuemceqi; } echo $this->iuygowkemiiwqmiw("\146\141\161\137\154\151\163\x74", [self::qgqyauaqwqmqseim => IconFontawesomeInterface::cugwqwigakiwyiuk, self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\106\x41\121", PR__MDL__STRUCTURED_DATA)]); mqccmesakuemceqi: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $post = ManipulatePost::get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto yssscwioiyygssec; } $agkmksicugiqcucq = []; if (!$post) { goto qcessicwuikwqsis; } $kgcuukieymaqosmm = ManipulatePost::igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto qwcegcuowwgiccos; } foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = ManipulateArray::get($igqsaukqcqscimok, self::kuygeqomywoykkai); $wqckkkeieieqasqk = ManipulateArray::get($igqsaukqcqscimok, self::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto kooskuwkuayiuose; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; kooskuwkuayiuose: twkmiuomimomscew: } eyiamcekkgkiawqy: qwcegcuowwgiccos: qcessicwuikwqsis: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [self::kuygeqomywoykkai, self::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); yssscwioiyygssec: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\x66\x61\x71\137\x74\141\x62", __("\x46\x41\121", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::sqgaeeagsegecugi)->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::kuygeqomywoykkai, __("\121\165\145\163\x74\x69\x6f\x6e", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::eeiymeksiysiuemu, __("\x41\156\x73\167\x65\x72", PR__MDL__STRUCTURED_DATA))->qsecygiycssgacqs(5)->qigsyyqgewgskemg("\x77\x2d\x6d\144\x2d\61\60\60"))->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::yyuoksqosaqkqcaa); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
