<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace GPBMetadata\Eolymp\Typewriter;

class Block
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Typewriter\Inline::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae5140a1d656f6c796d702f747970657772697465722f626c6f636b2e70726f746f1211656f6c796d702e7479706577726974657222370a09436f6e7461696e6572122a0a086368696c6472656e18012003280b32182e656f6c796d702e747970657772697465722e426c6f636b22b6130a05426c6f636b12370a0970617261677261706818012001280b32222e656f6c796d702e747970657772697465722e426c6f636b2e506172616772617068480012310a066c61796f757418022001280b321f2e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75744800122d0a04636f646518032001280b321d2e656f6c796d702e747970657772697465722e426c6f636b2e436f64654800122d0a046d61746818042001280b321d2e656f6c796d702e747970657772697465722e426c6f636b2e4d6174684800122f0a05696d61676518052001280b321e2e656f6c796d702e747970657772697465722e426c6f636b2e496d616765480012330a0768656164696e6718062001280b32202e656f6c796d702e747970657772697465722e426c6f636b2e48656164696e674800122d0a046c69737418072001280b321d2e656f6c796d702e747970657772697465722e426c6f636b2e4c6973744800122f0a05656d62656418082001280b321e2e656f6c796d702e747970657772697465722e426c6f636b2e456d6265644800122f0a057461626c6518092001280b321e2e656f6c796d702e747970657772697465722e426c6f636b2e5461626c65480012310a06776964676574180a2001280b321f2e656f6c796d702e747970657772697465722e426c6f636b2e57696467657448001a380a09506172616772617068122b0a086368696c6472656e18012003280b32192e656f6c796d702e747970657772697465722e496e6c696e651a8e040a064c61796f7574123c0a09646972656374696f6e18012001280e32292e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75742e446972656374696f6e12420a0b616c69676e5f6974656d73180a2001280e322d2e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75742e466c6578416c69676e6d656e7412440a0d616c69676e5f636f6e74656e74180b2001280e322d2e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75742e466c6578416c69676e6d656e7412440a0d6a7573746966795f6974656d73180c2001280e322d2e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75742e466c6578416c69676e6d656e7412460a0f6a7573746966795f636f6e74656e74180d2001280e322d2e656f6c796d702e747970657772697465722e426c6f636b2e4c61796f75742e466c6578416c69676e6d656e74120b0a0367617018142001280d120d0a05776964746818162001280d120f0a0770616464696e6718152003280d122e0a086368696c6472656e18642003280b321c2e656f6c796d702e747970657772697465722e436f6e7461696e657222200a09446972656374696f6e12070a03524f571000120a0a06434f4c554d4e1001222f0a0d466c6578416c69676e6d656e7412090a0553544152541000120a0a0643454e544552100112070a03454e4410021ac9010a044c69737412320a057374796c6518012001280e32232e656f6c796d702e747970657772697465722e426c6f636b2e4c6973742e5374796c6512340a086368696c6472656e180a2003280b32222e656f6c796d702e747970657772697465722e426c6f636b2e4c6973742e4974656d1a320a044974656d122a0a086368696c6472656e18012003280b32182e656f6c796d702e747970657772697465722e426c6f636b22230a055374796c65120c0a0842554c4c455445441000120c0a084e554d424552454410011a630a05496d616765120b0a03737263180120012809120b0a03616c74180220012809120f0a0763617074696f6e180320012809120d0a05776964746818042001280d120e0a0668656967687418052001280d12100a087a6f6f6d61626c651806200128081a450a0748656164696e67120d0a056c6576656c18012001280d122b0a086368696c6472656e180a2003280b32192e656f6c796d702e747970657772697465722e496e6c696e651a170a044d617468120f0a07636f6e74656e741802200128091a250a04436f6465120c0a046c616e67180120012809120f0a07636f6e74656e741802200128091a710a05456d626564120c0a047061746818012001280912340a0676616c75657318022003280b32242e656f6c796d702e747970657772697465722e426c6f636b2e456d6265642e56616c75651a240a0556616c7565120c0a046e616d65180120012809120d0a0576616c75651802200128091afd040a055461626c6512350a0668656164657218012001280e32252e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e486561646572120e0a06626f7264657218022001280812360a07636f6c756d6e73180b2003280b32252e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e436f6c756d6e12340a086368696c6472656e180a2003280b32222e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e526f771a9f010a06436f6c756d6e12430a07685f616c69676e18012001280e32322e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e486f72697a6f6e74616c416c69676e6d656e7412410a07765f616c69676e18022001280e32302e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e566572746963616c416c69676e6d656e74120d0a057769647468180a2001280d1a3c0a03526f7712350a086368696c6472656e18012003280b32232e656f6c796d702e747970657772697465722e426c6f636b2e5461626c652e43656c6c1a320a0443656c6c122a0a086368696c6472656e18032003280b32182e656f6c796d702e747970657772697465722e426c6f636b22300a0648656164657212080a044e4f4e451000120e0a0a484f52495a4f4e54414c1001120c0a08564552544943414c100222430a13486f72697a6f6e74616c416c69676e6d656e7412080a044c4546541000120a0a0643454e544552100112090a0552494748541002120b0a074a555354494659100322340a11566572746963616c416c69676e6d656e7412070a03544f501000120a0a064d4944444c451001120a0a06424f54544f4d10021aba010a06576964676574120c0a046e616d6518012001280912430a0a6174747269627574657318022003280b322f2e656f6c796d702e747970657772697465722e426c6f636b2e5769646765742e41747472696275746573456e747279122a0a086368696c6472656e180a2003280b32182e656f6c796d702e747970657772697465722e426c6f636b1a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142060a046e6f646542375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f747970657772697465723b74797065777269746572620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

