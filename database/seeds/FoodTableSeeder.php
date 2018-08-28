<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('foods')->truncate();
        \Illuminate\Support\Facades\DB::table('foods')->insert([
            [
                'restaurantID' => 1,
                'name' => 'Cá hồi áp chảo ăn cùng với rong biển và trứng cá hồi',
                'avatar' => 'gia-trung-ca-hoi2.jpg',
                'price' => '50000',
                'discount' => '43000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Cá hồi tươi sống ướp thảo mộc thái hạt lựu',
                'avatar' => 'images.jpg',
                'price' => '140000',
                'discount' => '120000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Rau xà lách, thịt lợn xông khói, bánh mỳ sấy',
                'avatar' => 'thitkhoi.jpg',
                'price' => '130000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'restaurantID' => 1,
                'name' => 'Salad cá hồi tẩm vừng, vị quất ăn kèm cà muối Việt',
                'avatar' => 'LAT6.jpg',
                'price' => '160000',
                'discount' => '135000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Súp kem nghệ và cá hồi áp chảo',
                'avatar' => 'kemca.jpg',
                'price' => '100000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Cá hồi muốn ăn kèm hoa quả tươi theo mùa',
                'avatar' => 'mẹo-chọn-hoa-quả1.jpg',
                'price' => '120000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Cá hồi tươi sống và trứng cá hồi, sốt xì dầu',
                'avatar' => 'download.jpg',
                'price' => '120000',
                'discount' => '100000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Nem tươi cuốn cá hồi muối và nem rán cá hồi',
                'avatar' => 'nemcuon.jpg',
                'price' => '60000',
                'discount' => '50000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Súp chua cay, nấm tươi, cá hồi nướng, sả cây',
                'avatar' => 'Canh-ca-tram-nau-doc-mung (1).jpg',
                'price' => '90000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Súp khoai tây, lê ướp lá bạc hà ăn cùng với bánh mỳ',
                'avatar' => 'soup-1-7494-1389251301.jpg',
                'price' => '70000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Bánh mỳ với pate Salmonoid và ruốc cá hồi',
                'avatar' => 'lam-pate-gan-don-gian-tai-nha-1.jpg',
                'price' => '50000',
                'discount' => '45000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 1,
                'name' => 'Bánh mỳ vòng cá hồi tự muối',
                'avatar' => 'foody-mobile-t2-jpg-594-635925226775395566.jpg',
                'price' => '35000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Cơm ướp thảo mộc rang với sò điệp và ruốc cá hồi',
                'avatar' => '5998432334_45140c2466.jpg',
                'price' => '100000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Nem tươi cuộn cá hồi tự muối',
                'avatar' => 'nemchua.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Bánh mỳ với rau nướng phủ phô mai và cá hồi xông',
                'avatar' => 'banhmi.jpg',
                'price' => '40000',
                'discount' => '34000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Cá hồi cà ri, ăn kèm với cơm và rau theo mùa',
                'avatar' => 'comca.jpg',
                'price' => '50000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Cá hồi kho cùng thịt ba chỉ, ăn cùng cơm và rau thơm',
                'avatar' => 'cakho.jpg',
                'price' => '75000',
                'discount' => '65000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Mỳ dẹt sốt chanh leo và Cá hồi hun khói',
                'avatar' => 'cach-lam-mi-y-xao-ca-hoi-kem-tuoi-moi-la-thom-ngon-beo-ngay-doi-vi-cho-ca-nha-7.jpg',
                'price' => '120000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Rau xà lách, thịt lợn muối, bánh mỳ sấy',
                'avatar' => 'thit-lon-tam-bot-chien-sot-teriyaki-kieu-nhat-don-gian11521082470.jpg',
                'price' => '60000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Soup theo mùa của bếp trưởng',
                'avatar' => '0166-sup-trai-cay.png',
                'price' => '44000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Cá hồi áp chảo được rán giòn da, cơm Risotto Ý',
                'avatar' => 'mon ca hoi ap chao com vung - tung lam.jpg',
                'price' => '230000',
                'discount' => '200000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Cá hồi tẩm bột chiên, ăn kèm với khoai tây',
                'avatar' => 'thuong-thuc-banh-khoai-tay-tam-bot-dau-xanh-cho-mua-dong-7.jpg',
                'price' => '170000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Thăn bò Úc nướng với sốt tiêu, cá hồi, khoai tây',
                'avatar' => 'BinaryImageShowBlogImage.jpg',
                'price' => '99000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 2,
                'name' => 'Sò điệp áp chảo, cá hồi nướng, măng tây và hai loạ',
                'avatar' => 'cách-làm-shell-nướng-mỡ-hành-1.jpg',
                'price' => '200000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Sườn nướng tảng sốt mật ông rừng',
                'avatar' => 'cach-lam-suon-kinh-do-thom-ngon-thu-thiet-danh-cho-chi-em-4.jpg',
                'price' => '300000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Mỳ Ý sốt Bolognese',
                'avatar' => 'myy.jpg',
                'price' => '115000',
                'discount' => '105000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Combo sườn nướng tảng+khoai chiên',
                'avatar' => 'suon (2).jpg',
                'price' => '340000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Salad Caeser Với Gà Nướng',
                'avatar' => 'new-england-chicken-salad.jpg',
                'price' => '200000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Cánh Gà Chiên Mật Ong Vừng',
                'avatar' => 'cach-lam-canh-ga-chien-mat-ong-4.jpg',
                'price' => '70000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Cơm Rang Dứa',
                'avatar' => 'comrang.jpg',
                'price' => '120000',
                'discount' => '105000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Cơm Sườn Nướng Sốt Mật Ong Vừng',
                'avatar' => '670px-Make-Honey-Chicken-Wings-Step-7.jpg',
                'price' => '120000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Cơm Rang Dưa Bò',
                'avatar' => 'duabo.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Salad Xoài',
                'avatar' => 'cach-lam-salad-xoai-dua-thom-mat-hap-dan-cuc-ngon-lam-mon-trang-mieng-cho-ca-nha-1.jpg',
                'price' => '100000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Nước Quất',
                'avatar' => 'lam-nuoc-rua-bat-tu-qua-quat-1.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Cafe',
                'avatar' => 'foody-mobile-foody-vi-dang-cafe-1-171-635744689783199673.jpg',
                'price' => '20000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 3,
                'name' => 'Tôm hấp bia',
                'avatar' => 'cach-lam-tom-hap-bia-4.jpg',
                'price' => '80000',
                'discount' => '60000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Vịt quay bắc kinh',
                'avatar' => 'foody-mobile-foody-vit-quay-bac-k-134-636331152878647505.jpg',
                'price' => '90000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Vịt quay',
                'avatar' => 'vit-quay-la-moc-mat.jpg',
                'price' => '70000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Bánh bao nhím',
                'avatar' => 'banh-nhim-5.jpg',
                'price' => '20000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Bánh bao hoàng kim',
                'avatar' => 'foody-mobile-banh-jpg-643-636105945896524185.jpg',
                'price' => '25000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Đậu hũ chiên',
                'avatar' => '55432.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Bò xốt tiêu đen',
                'avatar' => 'huong-dan-lam-mon-bo-sot-tieu-den-voi-huong-thom-nong-va-vi-dam-da-kho-cuong-6.jpg',
                'price' => '65000',
                'discount' => '50000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Thịt tổng hợp',
                'avatar' => 'foody-mobile-foody-bun-thit-nuong-728-636011472220626220.jpg',
                'price' => '80000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Rau xào nấm',
                'avatar' => 'cai-chip-xao-nam-1.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Bánh bao nhân phomai',
                'avatar' => 'bánh-bao-nhân-phô-mai.jpg',
                'price' => '15000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Mang tây sốt cua',
                'avatar' => 'sup-cua-mang-tay-1.jpg',
                'price' => '40000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Salad hoa quả',
                'avatar' => 'cach-lam-salad-hoa-qua-tuoi-ngon-nhat-4-Copy.jpg',
                'price' => '45000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 4,
                'name' => 'Món tráng miệng',
                'avatar' => 'cách-làm-món-tráng-miệng-nhanh-với-mì-ống-1.jpg',
                'price' => '25000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Súp hải sản',
                'avatar' => 'sup-hai-san.jpg',
                'price' => '60000',
                'discount' => '45000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Gà hấp lá chanh',
                'avatar' => 'foody-mobile-15-1-jpg-635435272718024693.jpg',
                'price' => '150000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Tôm chiên trứng muối',
                'avatar' => 'cach-lam-tom-chien-trung-muoi-moi-la-thom-lung-doi-vi-cho-bua-com-gia-dinh-them-ngon-mieng-1.jpg',
                'price' => '75000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Rau muống xào tỏi',
                'avatar' => '14-1517297657.jpg',
                'price' => '40000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Bún chả thịt nướng',
                'avatar' => 'foody-mobile-ha-guc-bao-tu-voi-10-127-636416711369970930.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Canh sườn nấu sấu chua',
                'avatar' => 'Cach-lam-canh-suon-nau-sau-4.jpg',
                'price' => '70000',
                'discount' => '55000',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Chè hoa cau',
                'avatar' => 'cach-nau-che-hoa-cau-don-gian-3.jpg',
                'price' => '30000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Cảo nấu',
                'avatar' => 'cach-nau-canh-ha-cao-tom-thit-ngot-mat-thom-ngon-hap-dan-khong-nen-bo-qua-9.jpg',
                'price' => '200000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Bánh bao xá xíu',
                'avatar' => 'Cach_lam_nhan_banh_bao_111.jpg',
                'price' => '20000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Bánh bao trứng sữa',
                'avatar' => 'cach-lam-banh-bao-trung-muoi-thai-lan.jpg',
                'price' => '18000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Bánh cuộn bí đỏ',
                'avatar' => 'khong-can-lo-nuong-lam-banh-cuon-ngon-la-1.jpg',
                'price' => '40000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'restaurantID' => 5,
                'name' => 'Xíu mại tôm',
                'avatar' => 'siu-mai-nhan-tom-thit6.jpg',
                'price' => '40000',
                'discount' => '0',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
