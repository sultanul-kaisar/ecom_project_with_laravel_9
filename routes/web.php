<?php

use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\PolicyController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ShipCountryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubSubCategoryController;


use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('frontend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(IndexController::class)->group(function (){
    Route::get('/', 'Index')->name('index');
    Route::get('/user/logout', 'UserLogout')->name('user.logout');

    Route::get('/product/details/{id}/{slug}', 'ProductDetails')->name('product.details');

    Route::get('/products/{id}', 'ProductBySubSubCat')->name('productBySubSubcat');

    Route::get('/product/view/modal/{id}', 'ProductViewAjax');

    Route::get('/blogs', 'ViewBlog')->name('blogs');
    Route::get('/blogs/details/{id}/{slug}', 'BlogDetails')->name('blog.details');

    Route::get('/policy', 'Policy')->name('policy');

});


Route::controller(CartController::class)->group(function (){
    Route::post('/cart/data/store/{id}', 'AddToCart');
    Route::get('/product/mini/cart/', 'AddMiniCart');
    Route::get('/minicart/product-remove/{rowId}', 'RemoveMiniCart');
    Route::get('/coupon-remove', 'CouponRemove');


    Route::post('/coupon-apply', 'CouponApply');
    Route::get('/coupon-calculation', 'CouponCalculation');

    Route::get('/checkout', 'CheckoutCreate')->name('checkout');
});


Route::middleware(['auth:web'])->group(function (){
    Route::controller(WishlistController::class)->group(function (){
        Route::post('/add-to-wishlist/{id}', 'AddToWishList');

        Route::get('/wishlist', 'ViewWishList')->name('wishlist');
        Route::get('/get-wishlist-product', 'GetWishListProduct');
        Route::get('/wishlist-remove/{id}', 'RemoveWishListProduct');
    });


});
Route::controller(CartPageController::class)->group(function(){
    Route::get('/mycart', 'MyCart')->name('mycart');
    Route::get('/get-cart-product', 'GetCartProduct');
    Route::get('/cart-remove/{id}', 'RemoveCartProduct');
    Route::get('/cart-increment/{rowId}', 'CartIncrement');
    Route::get('/cart-decrement/{rowId}', 'CartDecrement');

});


Route::middleware(['auth:web'])->group(function (){
    Route::controller(UserProfileController::class)->group(function (){
        Route::get('/user/dashboard', 'UserDashboard')->name('user.dashboard');
        Route::get('/user/profile', 'UserProfile')->name('user.profile');
        Route::get('/user/profile/edit', 'EditProfile')->name('user.profile.edit');
        Route::post('/profile/update', 'UserProfileUpdate')->name('user.profile.update');

        Route::get('/password/change', 'UserPasswordChange')->name('change.password');
        Route::post('/password/update', 'UserUpdatePassword')->name('user.password.update');
    });

});


require __DIR__.'/auth.php';

/*--- admin routes ---*/
Route::middleware(['auth:admin'])->group(function (){
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

    // Route::middleware('auth:admin')->group(function () {
    //     Route::get('/admin-profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    //     Route::patch('/admin-profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    //     Route::delete('/admin-profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
    // });


    Route::controller(AdminProfileController::class)->group(function (){
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::get('/admin/profile/edit', 'AdminProfileEdit')->name('admin.profile.edit');
        Route::post('/admin-profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('/admin-password/change', 'AdminPasswordChange')->name('admin.password.change');
        Route::post('/admin-password/update', 'AdminPasswordUpdate')->name('admin.password.update');
    });


    //Category Routes
    Route::prefix('brand')->group(function (){
        Route::controller(BrandController::class)->group(function (){
            Route::get('/view', 'AllBrand')->name('all.brand');
            Route::get('/create', 'AddBrand')->name('add.brand');

            Route::post('/store', 'StoreBrand')->name('store.brand');

            Route::get('/edit/{id}', 'EditBrand')->name('edit.brand');
            Route::post('/update/{id}', 'UpdateBrand')->name('update.brand');

            Route::get('/delete/{id}', 'DeleteBrand')->name('delete.brand');
        });
    });


    //Category Routes
    Route::prefix('category')->group(function (){
        Route::controller(CategoryController::class)->group(function (){
            Route::get('/view', 'AllCategory')->name('all.category');
            Route::get('/create', 'AddCategory')->name('add.category');


            Route::post('/store', 'StoreCategory')->name('store.category');

            Route::get('/edit/{id}', 'EditCategory')->name('edit.category');
            Route::post('/update/{id}', 'UpdateCategory')->name('update.category');

            Route::get('/delete/{id}', 'DeleteCategory')->name('delete.category');
        });
    });

        //Subcategory Routes
    Route::prefix('subcategory')->group(function (){
        Route::controller(SubcategoryController::class)->group(function (){
            Route::get('/view', 'AllSubCategory')->name('all.subcategory');
            Route::get('/add', 'AddSubCategory')->name('add.subcategory');

            Route::post('/store', 'StoreSubCategory')->name('store.subcategory');
            Route::get('/ajax/{category_id}','GetSubCategory');

            Route::get('/edit/{id}', 'EditSubCategory')->name('edit.subcategory');
            Route::post('/update/{id}', 'UpdateSubCategory')->name('update.subcategory');

            Route::get('/delete/{id}', 'DeleteSubCategory')->name('delete.subcategory');
        });
    });

        //Sub-Subcategory Routes
    Route::prefix('subsubcat')->group(function (){
        Route::controller(SubSubcategoryController::class)->group(function (){
            Route::get('/sub/sub/view', 'AllSubSubCat')->name('all.subsubcat');
            Route::get('/sub/add', 'AddSubSubCat')->name('add.subsubcat');

            Route::post('/store', 'StoreSubSubCat')->name('store.subsubcat');
            Route::get('/ajax/{category_id}','GetSubSubCategory');

            Route::get('/edit/{id}', 'EditSubSubCat')->name('edit.subsubcat');
            Route::post('/update/{id}', 'UpdateSubSubCat')->name('update.subsubcat');

            Route::get('/delete/{id}', 'DeleteSubSubCat')->name('delete.subsubcat');
        });
    });



    //Products Routes
    Route::prefix('product')->group(function (){
        Route::controller(ProductController::class)->group(function (){
            Route::get('/manage', 'ManageProduct')->name('manage.product');

            Route::get('/add', 'AddProduct')->name('add.product');
            Route::post('/store', 'StoreProduct')->name('store.product');

            Route::get('/edit/{id}', 'EditProduct')->name('edit.product');
            Route::post('/update/{id}', 'UpdateProduct')->name('update.product');
            Route::post('/thumbnail/update/{id}', 'ThumbnailUpdate')->name('update.thumbnail');

            Route::post('/multiImg/update', 'MultiImgUpdate')->name('update.multiImg');
            Route::get('/multiImg/delete/{id}', 'MultiImgDelete')->name('multiImg.delete');

            Route::get('/inactive/{id}', 'ProductInactive')->name('product.inactive');
            Route::get('/active/{id}', 'ProductActive')->name('product.active');

            Route::get('/delete/{id}', 'DeleteProduct')->name('product.delete');


        });

    });

    //Coupon Routes
    Route::prefix('coupon')->group(function (){
        Route::controller(CouponController::class)->group(function (){
            Route::get('/view', 'ViewCoupon')->name('manage.coupon');

            Route::get('/add', 'AddCoupon')->name('add.coupon');
            Route::post('/store', 'CouponStore')->name('store.coupon');

            Route::get('/edit/{id}', 'EditCoupon')->name('edit.coupon');
            Route::post('/update/{id}', 'UpdateCoupon')->name('update.coupon');

            Route::get('/delete/{id}', 'DeleteCoupon')->name('delete.coupon');

        });
    });


    //Coupon Routes
    Route::prefix('shipping')->group(function (){
        Route::controller(ShipCountryController::class)->group(function (){
            Route::get('/country/view', 'ViewCountry')->name('manage.country');

            Route::get('/country/add', 'AddCountry')->name('add.country');
            Route::post('/country/store', 'StoreCountry')->name('store.country');

            Route::get('/country/edit/{id}', 'EditCountry')->name('edit.country');
            Route::post('/country/update/{id}', 'UpdateCountry')->name('update.country');

            Route::get('/country/delete/{id}', 'DeleteCountry')->name('delete.country');


            Route::get('/state/view', 'ViewState')->name('manage.state');

            Route::get('/state/add', 'AddState')->name('add.state');
            Route::post('/state/store', 'StoreState')->name('store.state');

            Route::get('/state/edit/{id}', 'EditState')->name('edit.state');
            Route::post('/state/update/{id}', 'UpdateState')->name('update.state');

            Route::get('/state/delete/{id}', 'DeleteState')->name('delete.state');

        });
    });

    //Slider Routes
    Route::prefix('slider')->group(function (){
        Route::controller(SliderController::class)->group(function (){
            Route::get('/view', 'ViewSlider')->name('view.slider');

            Route::get('/add', 'AddSlider')->name('add.slider');
            Route::post('/store', 'StoreSlider')->name('store.slider');

            Route::get('/edit/{id}', 'EditSlider')->name('edit.slider');
            Route::post('/update/{id}', 'UpdateSlider')->name('update.slider');

            Route::get('/inactive/{id}', 'SliderInactive')->name('slider.inactive');
            Route::get('/active/{id}', 'SliderActive')->name('slider.active');

            Route::get('/delete/{id}', 'DeleteSlider')->name('delete.slider');

        });
    });


    //Blog Routes
    Route::prefix('blog')->group(function (){
        Route::controller(BlogController::class)->group(function (){
            Route::get('/manage', 'ManageBlog')->name('manage.blog');

            Route::get('/add', 'AddBlog')->name('add.blog');
            Route::post('/store', 'StoreBlog')->name('store.blog');

            Route::get('/edit/{id}', 'EditBlog')->name('edit.blog');
            Route::post('/update/{id}', 'UpdateBlog')->name('update.blog');

            Route::get('/inactive/{id}', 'BlogInactive')->name('blog.inactive');
            Route::get('/active/{id}', 'BlogActive')->name('blog.active');

            Route::get('/delete/{id}', 'DeleteBlog')->name('blog.delete');

        });
    });


    //Policy Routes
    Route::prefix('policy')->group(function (){
        Route::controller(PolicyController::class)->group(function (){
            Route::get('/manage', 'ManagePolicy')->name('manage.policy');

            Route::get('/add', 'AddPolicy')->name('add.policy');
            Route::post('/store', 'StorePolicy')->name('store.policy');

            Route::get('/edit/{id}', 'EditPolicy')->name('edit.policy');
            Route::post('/update/{id}', 'UpdatePolicy')->name('update.policy');

            Route::get('/inactive/{id}', 'PolicyInactive')->name('policy.inactive');
            Route::get('/active/{id}', 'PolicyActive')->name('policy.active');

            Route::get('/delete/{id}', 'DeletePolicy')->name('policy.delete');

        });
    });


    //Footer Routes
    Route::prefix('footer')->group(function (){
        Route::controller(FooterController::class)->group(function (){
            Route::get('/view', 'AllFooter')->name('all.footer');
            Route::get('/create', 'AddFooter')->name('add.footer');

            Route::post('/store', 'StoreFooter')->name('store.footer');

            Route::get('/edit/{id}', 'EditFooter')->name('edit.footer');
            Route::post('/update/{id}', 'UpdateFooter')->name('update.footer');
        });
    });
});

require __DIR__.'/adminauth.php';

/*--- End admin routes ---*/


