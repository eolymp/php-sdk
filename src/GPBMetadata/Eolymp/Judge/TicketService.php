<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace GPBMetadata\Eolymp\Judge;

class TicketService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Judge\Activity::initOnce();
        \GPBMetadata\Eolymp\Judge\Announcement::initOnce();
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        \GPBMetadata\Eolymp\Judge\Participant::initOnce();
        \GPBMetadata\Eolymp\Judge\Problem::initOnce();
        \GPBMetadata\Eolymp\Judge\Reply::initOnce();
        \GPBMetadata\Eolymp\Judge\Result::initOnce();
        \GPBMetadata\Eolymp\Judge\Score::initOnce();
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        \GPBMetadata\Eolymp\Judge\Template::initOnce();
        \GPBMetadata\Eolymp\Judge\Ticket::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9c280a21656f6c796d702f6a756467652f7469636b65745f736572766963652e70726f746f120c656f6c796d702e6a756467651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a18656f6c796d702f65636d2f636f6e74656e742e70726f746f1a1b656f6c796d702f6a756467652f61637469766974792e70726f746f1a1f656f6c796d702f6a756467652f616e6e6f756e63656d656e742e70726f746f1a1a656f6c796d702f6a756467652f636f6e746573742e70726f746f1a1e656f6c796d702f6a756467652f7061727469636970616e742e70726f746f1a1a656f6c796d702f6a756467652f70726f626c656d2e70726f746f1a18656f6c796d702f6a756467652f7265706c792e70726f746f1a19656f6c796d702f6a756467652f726573756c742e70726f746f1a18656f6c796d702f6a756467652f73636f72652e70726f746f1a1d656f6c796d702f6a756467652f7375626d697373696f6e2e70726f746f1a1b656f6c796d702f6a756467652f74656d706c6174652e70726f746f1a19656f6c796d702f6a756467652f7469636b65742e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22730a114372656174655469636b6574496e70757412120a0a636f6e746573745f6964180120012809120f0a077375626a65637418022001280912240a076d65737361676518042001280b32132e656f6c796d702e65636d2e436f6e74656e7412130a0b7261775f6d65737361676518032001280922270a124372656174655469636b65744f757470757412110a097469636b65745f696418012001280922390a10436c6f73655469636b6574496e70757412120a0a636f6e746573745f696418012001280912110a097469636b65745f696418022001280922130a11436c6f73655469636b65744f757470757422380a0f4f70656e5469636b6574496e70757412120a0a636f6e746573745f696418012001280912110a097469636b65745f696418022001280922120a104f70656e5469636b65744f757470757422380a0f526561645469636b6574496e70757412120a0a636f6e746573745f696418012001280912110a097469636b65745f696418022001280922120a10526561645469636b65744f7574707574223a0a1144656c6574655469636b6574496e70757412120a0a636f6e746573745f696418012001280912110a097469636b65745f696418022001280922140a1244656c6574655469636b65744f757470757422680a1344657363726962655469636b6574496e70757412120a0a636f6e746573745f696418012001280912110a097469636b65745f6964180220012809122a0a05657874726118e3082003280e321a2e656f6c796d702e6a756467652e5469636b65742e4578747261223c0a1444657363726962655469636b65744f757470757412240a067469636b657418012001280b32142e656f6c796d702e6a756467652e5469636b657422f5050a104c6973745469636b657473496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512360a0766696c7465727318282001280b32252e656f6c796d702e6a756467652e4c6973745469636b657473496e7075742e46696c74657212350a04736f727418322001280e32272e656f6c796d702e6a756467652e4c6973745469636b657473496e7075742e536f727461626c65122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e122a0a05657874726118e3082003280e321a2e656f6c796d702e6a756467652e5469636b65742e45787472611ab3030a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412320a0a636f6e746573745f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412360a0e7061727469636970616e745f696418032003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412310a096d656d6265725f696418082003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412400a1669735f726561645f62795f7061727469636970616e7418042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c123a0a1069735f726561645f62795f6f776e657218052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12310a0769735f6f70656e18062003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c122d0a036f776e18072003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c22460a08536f727461626c65120e0a0a435245415445445f4154100012110a0d524541445f42595f4f574e4552100112170a13524541445f42595f5041525449434950414e54100222470a114c6973745469636b6574734f7574707574120d0a05746f74616c18012001280512230a056974656d7318022003280b32142e656f6c796d702e6a756467652e5469636b6574225a0a105265706c795469636b6574496e70757412110a097469636b65745f696418012001280912240a076d657373616765180a2001280b32132e656f6c796d702e65636d2e436f6e74656e74120d0a05636c6f736518152001280822250a115265706c795469636b65744f757470757412100a087265706c795f6964180120012809223f0a1157617463685469636b657473496e707574122a0a05657874726118e3082003280e321a2e656f6c796d702e6a756467652e5469636b65742e457874726122d6010a1257617463685469636b6574734f757470757412350a056576656e7418012001280e32262e656f6c796d702e6a756467652e57617463685469636b6574734f75747075742e4576656e7412240a067469636b657418022001280b32142e656f6c796d702e6a756467652e5469636b657412140a0c756e726561645f636f756e7418032001280d224d0a054576656e7412100a0c4e4f5f4f5045524154494f4e1000120b0a07435245415445441001120b0a07555044415445441002120b0a0744454c455445441003120b0a075245504c4945441004226e0a104c6973745265706c696573496e70757412110a097469636b65745f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512290a05657874726118e3082003280e32192e656f6c796d702e6a756467652e5265706c792e457874726122460a114c6973745265706c6965734f7574707574120d0a05746f74616c18012001280512220a056974656d7318022003280b32132e656f6c796d702e6a756467652e5265706c7922370a1044656c6574655265706c79496e70757412110a097469636b65745f696418012001280912100a087265706c795f696418022001280922130a1144656c6574655265706c794f7574707574225d0a105570646174655265706c79496e70757412110a097469636b65745f696418012001280912100a087265706c795f696418022001280912240a076d65737361676518032001280b32132e656f6c796d702e65636d2e436f6e74656e7422130a115570646174655265706c794f757470757422610a1157617463685265706c696573496e70757412110a097469636b65745f6964180120012809120e0a06637572736f7218022001280912290a05657874726118e3082003280e32192e656f6c796d702e6a756467652e5265706c792e457874726122ac010a1257617463685265706c6965734f757470757412350a056576656e7418012001280e32262e656f6c796d702e6a756467652e57617463685265706c6965734f75747075742e4576656e7412220a057265706c7918022001280b32132e656f6c796d702e6a756467652e5265706c79223b0a054576656e74120b0a074e4f5f545950451000120b0a07435245415445441001120b0a07555044415445441002120b0a0744454c45544544100332c30f0a0d5469636b6574536572766963651293010a0c4372656174655469636b6574121f2e656f6c796d702e6a756467652e4372656174655469636b6574496e7075741a202e656f6c796d702e6a756467652e4372656174655469636b65744f7574707574224082e30a1d8ae30a196a756467653a636f6e746573743a7061727469636970617465eae20a0bf5e20a0000803ff8e20a0582d3e493020a22082f7469636b657473129c010a0b436c6f73655469636b6574121e2e656f6c796d702e6a756467652e436c6f73655469636b6574496e7075741a1f2e656f6c796d702e6a756467652e436c6f73655469636b65744f7574707574224c82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021c221a2f7469636b6574732f7b7469636b65745f69647d2f636c6f73651298010a0a4f70656e5469636b6574121d2e656f6c796d702e6a756467652e4f70656e5469636b6574496e7075741a1e2e656f6c796d702e6a756467652e4f70656e5469636b65744f7574707574224b82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021b22192f7469636b6574732f7b7469636b65745f69647d2f6f70656e1297010a0a526561645469636b6574121d2e656f6c796d702e6a756467652e526561645469636b6574496e7075741a1e2e656f6c796d702e6a756467652e526561645469636b65744f7574707574224a82e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a00000040f8e20a0a82d3e493021b22192f7469636b6574732f7b7469636b65745f69647d2f726561641299010a0c44656c6574655469636b6574121f2e656f6c796d702e6a756467652e44656c6574655469636b6574496e7075741a202e656f6c796d702e6a756467652e44656c6574655469636b65744f7574707574224682e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e49302162a142f7469636b6574732f7b7469636b65745f69647d129e010a0e44657363726962655469636b657412212e656f6c796d702e6a756467652e44657363726962655469636b6574496e7075741a222e656f6c796d702e6a756467652e44657363726962655469636b65744f7574707574224582e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a00000040f8e20a0a82d3e493021612142f7469636b6574732f7b7469636b65745f69647d1289010a0b4c6973745469636b657473121e2e656f6c796d702e6a756467652e4c6973745469636b657473496e7075741a1f2e656f6c796d702e6a756467652e4c6973745469636b6574734f7574707574223982e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020a12082f7469636b65747312a4010a0b5265706c795469636b6574121e2e656f6c796d702e6a756467652e5265706c795469636b6574496e7075741a1f2e656f6c796d702e6a756467652e5265706c795469636b65744f7574707574225482e30a1d8ae30a196a756467653a636f6e746573743a7061727469636970617465eae20a0bf5e20a0ad7233ef8e20a0582d3e493021e221c2f7469636b6574732f7b7469636b65745f69647d2f7265706c696573126f0a0c57617463685469636b657473121f2e656f6c796d702e6a756467652e57617463685469636b657473496e7075741a202e656f6c796d702e6a756467652e57617463685469636b6574734f7574707574221a82e30a168ae30a126a756467653a636f6e746573743a726561643001129d010a0b4c6973745265706c696573121e2e656f6c796d702e6a756467652e4c6973745265706c696573496e7075741a1f2e656f6c796d702e6a756467652e4c6973745265706c6965734f7574707574224d82e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021e121c2f7469636b6574732f7b7469636b65745f69647d2f7265706c69657312a9010a0b44656c6574655265706c79121e2e656f6c796d702e6a756467652e44656c6574655265706c79496e7075741a1f2e656f6c796d702e6a756467652e44656c6574655265706c794f7574707574225982e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302292a272f7469636b6574732f7b7469636b65745f69647d2f7265706c6965732f7b7265706c795f69647d12a9010a0b5570646174655265706c79121e2e656f6c796d702e6a756467652e5570646174655265706c79496e7075741a1f2e656f6c796d702e6a756467652e5570646174655265706c794f7574707574225982e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493022922272f7469636b6574732f7b7469636b65745f69647d2f7265706c6965732f7b7265706c795f69647d126f0a0c57617463685265706c696573121f2e656f6c796d702e6a756467652e57617463685265706c696573496e7075741a202e656f6c796d702e6a756467652e57617463685265706c6965734f7574707574221a82e30a168ae30a126a756467653a636f6e746573743a726561643001422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

