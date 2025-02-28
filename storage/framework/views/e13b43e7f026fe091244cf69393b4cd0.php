 <div>

     <div class="loader">
         <img src="<?php echo e(asset('website-assets/imgs/logo-color.svg')); ?>" width="100" height="100" alt="logo" />
     </div>

     <!-- Content  -->

     <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Website.IndexSections.MasterSlider', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3841577719-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:Website.IndexSections.MasterSlider>
     <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Website.IndexSections.Reels', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3841577719-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:Website.IndexSections.Reels>
     <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Website.IndexSections.Advisories', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3841577719-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:Website.IndexSections.Advisories>
 

  
 


     <div class="poll pSection">
         <div class="container-lg">
             <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                 <div class="col-auto">
                     <h2 class="titleSection">
                         <img src="<?php echo e(asset('website-assets/imgs/logo-color2.svg')); ?>" width="16" height="16"
                             alt="logo" class="me-2" />
                         استطلاع رأي
                     </h2>
                 </div>
                 <div class="col-auto">
                     <a href="" class="btnFill btnFill2"> قسم التصويتات </a>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="boxPoll">
                         <h5>سؤال استطلاع الرأي</h5>
                         <div>
                             <input type="radio" name="poll" id="poll1" hidden />
                             <label for="poll1">
                                 الرأي الأول
                                 <span>60%</span>
                                 <i style="width: 60%"></i>
                             </label>
                             <input type="radio" name="poll" id="poll2" hidden />
                             <label for="poll2">
                                 الرأي الثاني
                                 <span>20%</span>
                                 <i style="width: 20%"></i>
                             </label>
                             <input type="radio" name="poll" id="poll3" hidden />
                             <label for="poll3">
                                 الرأي الثالث
                                 <span>15%</span>
                                 <i style="width: 15%"></i>
                             </label>
                             <input type="radio" name="poll" id="poll4" hidden />
                             <label for="poll4">
                                 الرأي الرابع
                                 <span>5%</span>
                                 <i style="width: 5%"></i>
                             </label>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Files For Live Video -->

     <!-- Files For Live Video -->

     <div class="live pSection">
         <div class="container-lg">
             <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                 <div class="col-auto">
                     <h2 class="titleSection titleSection2">
                         <img src="<?php echo e(asset('website-assets//imgs/logo-color.svg')); ?>" width="16" height="16"
                             alt="logo" class="me-2" />
                         البث المباشر
                     </h2>
                 </div>
             </div>
             <div class="row g-4">
                 <div class="col-lg-7">
                     <div class="player">
                         <div class="live-badge">
                             <span></span>
                             LIVE
                         </div>
                         <video controls crossorigin playsinline
                             poster="<?php echo e(asset('website-assets/images/back-player.jpg')); ?>"></video>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="tableLive">
                         <h6>جدول البث اليوم</h6>
                         <table>
                             <tr>
                                 <th>اسم البرنامج</th>
                                 <th>الساعة</th>
                             </tr>
                             <tr>
                                 <td>أنين القلب</td>
                                 <td>14:00</td>
                             </tr>
                             <tr>
                                 <td>أنين القلب</td>
                                 <td>14:00</td>
                             </tr>
                             <tr>
                                 <td>أنين القلب</td>
                                 <td>14:00</td>
                             </tr>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Content  -->



 </div>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/livewire/website/index-sections/index.blade.php ENDPATH**/ ?>