<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57cac70982             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class FAQPage extends Tab { const sqgaeeagsegecugi = "\x66\141\161\x5f\155\x61\151\x6e\x5f\x65\x6e\164\151\164\x79"; const kuygeqomywoykkai = "\x71\165\145\x73\164\151\x6f\x6e"; const eeiymeksiysiuemu = "\141\x6e\163\x77\145\162"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto goacqqsgaaigyuaw; } echo $this->iuygowkemiiwqmiw("\146\141\x71\137\x6c\x69\x73\164", [self::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\x46\101\x51", PR__MDL__STRUCTURED_DATA)]); goacqqsgaaigyuaw: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto kecwuwwcwokuksyq; } $agkmksicugiqcucq = []; if (!$post) { goto egasokooagakisiy; } $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto mswsoaimesegiiic; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto usqgaogkqgemuima; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; usqgaogkqgemuima: wcesymwqykqoyuqk: } meawswgwagoqgkye: mswsoaimesegiiic: egasokooagakisiy: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [self::kuygeqomywoykkai, self::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); kecwuwwcwokuksyq: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x66\x61\161\137\164\141\x62")->gswweykyogmsyawy(__("\106\x41\x51", PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->usosgsaaimqcysyk()->gswweykyogmsyawy(__("\111\164\145\x6d\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\121\x75\x65\163\x74\151\157\156", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x41\x6e\x73\x77\x65\162", PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
