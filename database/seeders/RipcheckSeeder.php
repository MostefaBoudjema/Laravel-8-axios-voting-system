<?php

namespace Database\Seeders;

use App\Models\ripcheck;
use Illuminate\Database\Seeder;

class RipcheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            ['rip_number' => '00799999000079999900', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 0, 'rip_user_id' => 1,],
            ['rip_number' => '00799999000079999901', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 0, 'rip_user_id' => 1,],
            ['rip_number' => '00799999000903064580', 'rip_name' => 'Khatir benyamine', 'rip_phone' => '0777350213', 'rip_email' => 'Benyamine84@hotmail.fr', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001897898229', 'rip_name' => ' pay sera dzair star', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999000619570149', 'rip_name' => 'Rachid Bensaid', 'rip_phone' => '0673224354', 'rip_email' => ' didine2mahboul@yahoo.fr', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002867896968', 'rip_name' => 'Toufik Mezzigh', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002853554645', 'rip_name' => 'Ilays Chafai', 'rip_phone' => '0696471886', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002929110467', 'rip_name' => 'Yacine Helali', 'rip_phone' => '', 'rip_email' => 'ma0128979@gmail.com', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001621836423', 'rip_name' => 'Ude Cla', 'rip_phone' => '0669026729', 'rip_email' => 'Mother500@hotmail.fr', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001024969136', 'rip_name' => 'Ude Cla', 'rip_phone' => '0669026729', 'rip_email' => 'Mother500@hotmail.fr', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002600528884', 'rip_name' => 'BEN MESLI YACINE', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002368909762', 'rip_name' => 'Said younsi', 'rip_phone' => '0540950881', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002429688895', 'rip_name' => 'ayoub Touati', 'rip_phone' => '0655190052/0672373076/0783967843', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002877269205', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999000195904704', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001452419133', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002559427074', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001783284096', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999000174793721', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002905768872', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002809847124', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001984284683', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002673558729', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002384063005', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001912355788', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002491897323', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002939317292', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001933475210', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002397636215', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002951239465', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002630874849', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002802653216', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001965521682', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002933880830', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002902255726', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001946017795', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001577203813', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002671626489', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002294115487', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999000434914256', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002590194116', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001805676546', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002369801483', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001919371410', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002621214813', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002637712670', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002989463479', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002832471695', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001864448652', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002808685646', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002698409741', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002465436790', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002230422377', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002916191522', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002873674482', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999001862877640', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999000256102419', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],
            ['rip_number' => '00799999002833459737', 'rip_name' => '', 'rip_phone' => '', 'rip_email' => '', 'rip_status' => 1, 'rip_user_id' => 1],

        ];

        foreach ($items as $item) {
            ripcheck::create($item);
        }
    }
}
