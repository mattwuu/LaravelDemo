<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/22
 * Time: 3:37
 */

namespace Modules\Admin\Services;

use Blade;
use Modules\Article\Entities\Slide;

class TagService
{

    public function make()
    {
        $this->slide();
    }

    public function slide()
    {
        Blade::directive('slide', function ($expression) {
            $expression = $expression ?: '["height" => "300px"]';
            $php
              = <<<php
              <div class="swiper-container">
              <div class="swiper-wrapper">
<?php
    \$params = $expression;
    \$data = \Modules\Article\Entities\Slide::where('enable',1)->get();
    foreach(\$data as \$field):
    echo '<div class="swiper-slide">
    <a href="'.\$field['url'].'"><img src="'.\$field['pic'].'"/></a>
</div>';
    endforeach;
?>
</div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>

                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
<style>
                    .swiper-container {
                        width: 100%;
                        height: <?php echo \$params['height'] ;?>px;
                    }
                    .swiper-container img {
                        width: 100%;
                        height: <?php echo \$params['height'] ;?>px;
                    }
                </style>
                <script>
                    var mySwiper = new Swiper('.swiper-container', {
                        loop: true, // 循环模式选项
                        autoplay:true,
                        // 如果需要分页器
                        pagination: {
                            el: '.swiper-pagination',
                        },
                        // 如果需要前进后退按钮
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        // 如果需要滚动条
                        scrollbar: {
                            el: '.swiper-scrollbar',
                        },
                    })
                </script>
php;
            return $php;
        });
    }
}