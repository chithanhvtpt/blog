<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->title = "Kết bạn với người không đẹp trai để tránh bị lừa và cái kết bất ngờ";
        $blog->content = "Tôi năm nay 27 tuổi, làm việc trong một khu công nghiệp nơi mà tỷ lệ nữ luôn nhiều hơn nam, có lẽ cũng vì thế nên tôi rất ít có cơ hội được tiếp xúc với đàn ông, mãi chẳng tìm được một nửa cho mình.

Ở tuổi này, bố mẹ hay họ hàng đã bắt đầu giục tôi chuyện lấy chồng, tôi không kháng cự bởi bản thân cũng tự thấy là đã đến lúc rồi. Thế là tôi nảy ra ý định thông qua mạng xã hội facebook để tìm kiếm bạn trai. Mấy đứa bạn nghe tôi bảo thế thì khuyên rằng quen trên facebook để tán gẫu cho vui thôi chứ tìm bạn đời thì đừng bao giờ đặt hết niềm tin vào đó. Mạng xã hội là nơi quy tụ rất nhiều thành phần, tốt có, xấu có, đẹp có, lừa đảo có. Mà thường thì kẻ càng xấu càng thích tạo cho mình một vỏ bọc đẹp đẽ, hay đăng những lời nói bóng bẩy, hình ảnh bắt mắt để đi lừa người. Nghe mấy đứa bạn phân tích thấy cũng có lý, thế là sau nhiều ngày suy nghĩ, tôi quyết định kết bạn và nói chuyện với một anh có ngoại hình bình thường để tránh bị lừa.

Anh ấy tên là Hưng, ban đầu tôi là người chủ động bắt chuyện còn anh ấy thì có vẻ không mặn mà với tôi lắm. Nhưng có lẽ vì sự nhiệt tình và thật thà của tôi nên anh đã chịu trả lời tin nhắn. Từ đó, đều đặn mỗi tối trước khi đi ngủ chúng tôi đều ngồi nhắn tin với nhau cả tiếng đồng hồ. Theo những gì tôi cảm nhận thì tôi và Hưng nói chuyện rất hợp nhau, anh ấy dí dỏm, vui tính và rất tinh tế. Tôi bắt đầu say mê anh ấy từ lúc nào không hay, nhiều lần cũng muốn gặp mặt ở ngoài đời 1 lần để biết, nhưng sợ người ta từ chối nên chỉ âm thầm giữ tình cảm trong lòng.

Chủ nhật tuần trước, Hưng nhắn tin bảo anh ấy có việc đi qua chỗ tôi nên tiện thể muốn gọi tôi ra gặp mặt. Vừa mừng vừa sợ, tôi liền rủ thêm một đứa bạn gái đi cùng. Ra đến quán cafe thì tìm mãi không thấy ai giống như trong tưởng tượng, lúc đó nghĩ là bị lừa nên chúng tôi toan ra về thì một thanh niên to cao, tuấn tú tủm tỉm cười gọi tôi lại gần. Lúc đó tôi còn đang ngơ ngác không hiểu người đàn ông đó là ai thì anh ta nói tên là Hưng.

Không thể tin nổi, Hưng vượt trội hơn nhiều so với người đàn ông trong tưởng tượng của tôi. Anh giải thích là vì muốn tìm một người bạn đời thật sự nên đã tự làm xấu hình ảnh của mình đi, chứ để hình đẹp thì rất khó tìm được người chân thành.";
        $blog->user_id = 2;
        $blog->category_id = 2;
        $blog->date = "2021-12-12";
        $blog->save();
    }
}
