<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [1, 'super-admin', 'admin', '2021-07-27 08:52:24',  NULL],
            [4, 'admin', 'admin', '2021-08-08 12:45:31',  '2021-09-06 11:38:13' ],
            // [5, 'Manager', 'admin', '2021-08-08 13:02:21', '2021-09-06 11:40:16' ],
            // [7, 'Seller', 'seller', '2021-09-10 07:52:57', '2021-09-10 07:53:18' ],
        ];

        $permissions = [
            // Dashboard policy
            [ '1', 'access-dashboard', 'admin', 'dashboard'],
            [ '2', 'access-dashboard-count-box', 'admin', 'dashboard'],
            [ '3', 'access-dashboard-order', 'admin', 'dashboard'],
            [ '4', 'access-dashboard-statistic', 'admin', 'dashboard'],
            [ '5', 'access-dashboard-customer-list', 'admin', 'dashboard'],
            [ '6', 'access-dashboard-best-selling-list', 'admin', 'dashboard'],
            [ '7', 'access-dashboard-best-customer-list', 'admin', 'dashboard'],
            // [ '8', 'access-dashboard', 'seller', 'dashboard'],

            // Role policy
            [ '9', 'access-roles', 'admin', 'role'],
            [ '10', 'roles-list', 'admin', 'role'],
            [ '11', 'create-roles', 'admin', 'role'],
            [ '12', 'edit-roles', 'admin', 'role'],
            [ '13', 'delete-roles', 'admin', 'role'],

            // Role policy
            [ '14', 'access-users', 'admin', 'user'],
            [ '15', 'users-list', 'admin', 'user'],
            [ '16', 'create-users', 'admin', 'user'],
            [ '17', 'edit-users', 'admin', 'user'],
            [ '18', 'delete-users', 'admin', 'user'],

            // Order policy
            [ '19', 'access-order-management', 'admin', 'order'],
            [ '20', 'pending-orders-list', 'admin', 'order'],
            [ '21', 'orders-list', 'admin', 'order'],
            [ '22', 'confimed-orders-list', 'admin', 'order'],
            [ '23', 'processing-orders-list', 'admin', 'order'],
            [ '24', 'picked-orders-list', 'admin', 'order'],
            [ '25', 'shipped-orders-list', 'admin', 'order'],
            [ '26', 'delivered-orders-list', 'admin', 'order'],
            [ '27', 'cancelled-orders-list', 'admin', 'order'],
            [ '28', 'edit-orders', 'admin', 'order'],
            [ '29', 'delete-orders', 'admin', 'order'],
            // [ '30', 'access-order_management', 'seller', 'order'],
            // [ '31', 'orders-list', 'seller', 'order'],
            // [ '32', 'pending-orders-list', 'seller', 'order'],
            // [ '33', 'confimed-orders-list', 'seller', 'order'],
            // [ '34', 'processing-orders-list', 'seller', 'order'],
            // [ '35', 'picked-orders-list', 'seller', 'order'],
            // [ '36', 'shipped-orders-list', 'seller', 'order'],
            // [ '37', 'delivered-orders-list', 'seller', 'order'],
            // [ '38', 'cancelled-orders-list', 'seller', 'order'],
            // [ '39', 'edit-orders', 'seller', 'order'],
            // [ '40', 'delete-orders', 'seller', 'order'],

            // Customer policy
            [ '41', 'access-customer-management', 'admin', 'customer'],
            [ '42', 'customers-list', 'admin', 'customer'],
            [ '43', 'active-customers', 'admin', 'customer'],
            [ '44', 'suspend-customers', 'admin', 'customer'],
            [ '45', 'create-customers', 'admin', 'customer'],
            [ '46', 'edit-customers', 'admin', 'customer'],
            [ '47', 'email-customers', 'admin', 'order'],
            [ '48', 'delete-customers', 'admin', 'customer'],
            [ '49', 'suspended-customers-list', 'admin', 'customer'],
            [ '50', 'access-email-subscriber', 'admin', 'customer'],
            // [ '51', 'access-customer-management', 'seller', 'customer'],
            // [ '52', 'customers-list', 'seller', 'customer'],
            // [ '53', 'active-customers', 'seller', 'customer'],
            // [ '54', 'suspend-customers', 'seller', 'customer'],
            // [ '55', 'create-customers', 'seller', 'customer'],
            // [ '56', 'edit-customers', 'seller', 'customer'],
            // [ '57', 'email-customers', 'seller', 'order'],
            // [ '58', 'delete-customers', 'seller', 'customer'],
            // [ '59', 'suspended-customers-list', 'seller', 'customer'],
            // [ '60', 'access-email-subscriber', 'seller', 'customer'],

            // Product policy
            [ '61', 'access-product-management', 'admin', 'product'],
            [ '62', 'products-list', 'admin', 'product'],
            [ '63', 'create-products', 'admin', 'product'],
            [ '64', 'edit-products', 'admin', 'product'],
            [ '65', 'delete-products', 'admin', 'product'],
            // [ '66', 'access-product-management', 'seller', 'product'],
            // [ '67', 'products-list', 'seller', 'product'],
            // [ '68', 'create-products', 'seller', 'product'],
            // [ '69', 'edit-products', 'seller', 'product'],
            // [ '70', 'delete-products', 'seller', 'product'],

            // Categoty Policy
            [ '71', 'access-categories', 'admin', 'category'],
            [ '72', 'create-categories', 'admin', 'category'],
            [ '73', 'edit-categories', 'admin', 'category'],
            [ '74', 'delete-categories', 'admin', 'category'],
            // [ '75', 'access-categories', 'seller', 'category'],
            // [ '76', 'create-categories', 'seller', 'category'],
            // [ '77', 'edit-categories', 'seller', 'category'],
            // [ '78', 'delete-categories', 'seller', 'category'],
            
            // Brand Policy
            [ '79', 'access-brands', 'admin', 'brand'],
            [ '80', 'create-brands', 'admin', 'brand'],
            [ '81', 'edit-brands', 'admin', 'brand'],
            [ '82', 'delete-brands', 'admin', 'brand'],
            // [ '83', 'access-brands', 'seller', 'brand'],
            // [ '84', 'create-brands', 'seller', 'brand'],
            // [ '85', 'edit-brands', 'seller', 'brand'],
            // [ '86', 'delete-brands', 'seller', 'brand'],

            // Review policy
            // [ '87', 'browse_product_review', 'admin', 'product revew'],
            // [ '88', 'create_product_review', 'admin', 'product revew'],
            // [ '89', 'edit_product_review', 'admin', 'product revew'],
            // [ '90', 'delete_product_review', 'admin', 'product revew'],
            // [ '91', 'browse_product_review', 'seller', 'product revew'],
            // [ '92', 'create_product_review', 'seller', 'product revew'],
            // [ '93', 'edit_product_review', 'seller', 'product revew'],
            // [ '94', 'delete_product_review', 'seller', 'product revew'],

            // Product Promotional policy
            [ '95', 'access-promotion-management', 'admin', 'promotional product'],
            [ '96', 'promotional-products-list', 'admin', 'promotional product'],
            [ '97', 'create-promotional-products', 'admin', 'promotional product'],
            [ '98', 'edit-promotional-products', 'seller', 'promotional product'],
            [ '99', 'delete-promotional-products', 'seller', 'promotional product'],
            // [ '100', 'access-promotion-management', 'seller', 'promotional product'],
            // [ '101', 'promotional-products-list', 'seller', 'promotional product'],
            // [ '102', 'create-promotional-products', 'seller', 'promotional product'],
            // [ '103', 'edit-promotional-products', 'seller', 'promotional product'],
            // [ '104', 'delete-promotional-products', 'seller', 'promotional product'],

            // Seller Policy
            // [ '105', 'browse_sellers', 'admin', 'seller'],
            // [ '106', 'create_sellers', 'admin', 'seller'],
            // [ '107', 'edit_sellers', 'admin', 'seller'],
            // [ '108', 'delete_sellers', 'admin', 'seller'],
    
            // Content policy
            // [ '109', 'browse_content_management', 'admin', 'content'],
            // [ '110', 'browse_content_management', 'seller', 'content'],

            // Banner policy
            [ '111', 'access-content-management', 'admin', 'banner'],
            [ '112', 'banners-list', 'admin', 'banner'],
            [ '113', 'create-banners', 'admin', 'banner'],
            [ '114', 'edit-banners', 'admin', 'banner'],
            [ '115', 'delete-banners', 'admin', 'banner'],
            // [ '116', 'access-content-management', 'seller', 'banner'],
            // [ '117', 'banners-list', 'seller', 'banner'],
            // [ '118', 'create-banners', 'seller', 'banner'],
            // [ '119', 'edit-banners', 'seller', 'banner'],
            // [ '120', 'delete-banners', 'seller', 'banner'],
            
            // Setting policy
            [ '121', 'access-website-setting', 'admin', 'setting'],
            [ '122', 'access_header-info', 'admin', 'setting'],
            [ '123', 'access-all-pages', 'admin', 'setting'],
            [ '124', 'access-appearance', 'admin', 'setting'],
            [ '125', 'access-announcements', 'admin', 'setting'],

            // FAQ Categoty Policy     -----------  Not needed now
            // [ '126', 'browse_faq_categories', 'admin', 'faq_category'],
            // [ '127', 'create_faq_categories', 'admin', 'faq_category'],
            // [ '128', 'edit_faq_categories', 'admin', 'faq_category'],
            // [ '129', 'delete_faq_categories', 'admin', 'faq_category'],
            // [ '130', 'browse_faq_categories', 'seller', 'faq_category'],
            // [ '131', 'create_faq_categories', 'seller', 'faq_category'],
            // [ '132', 'edit_faq_categories', 'seller', 'faq_category'],
            // [ '133', 'delete_faq_categories', 'seller', 'faq_category'],

            // FAQ Sub Categoty Policy     -----------  Not needed now
            // [ '134', 'browse_faq_sub_categories', 'admin', 'faq_sub_category'],
            // [ '135', 'create_faq_sub_categories', 'admin', 'faq_sub_category'],
            // [ '136', 'edit_faq_sub_categories', 'admin', 'faq_sub_category'],
            // [ '137', 'delete_faq_sub_categories', 'admin', 'faq_sub_category'],
            // [ '138', 'browse_faq_sub_categories', 'seller', 'faq_sub_category'],
            // [ '139', 'create_faq_sub_categories', 'seller', 'faq_sub_category'],
            // [ '140', 'edit_faq_sub_categories', 'seller', 'faq_sub_category'],
            // [ '141', 'delete_faq_sub_categories', 'seller', 'faq_sub_category'],

            // Faq policy
            [ '142', 'access-faq-manager', 'admin', 'faq'],
            // [ '143', 'create_faqs', 'admin', 'faq'],
            // [ '144', 'edit_faqs', 'admin', 'faq'],
            // [ '145', 'delete_faqs', 'admin', 'faq'],
            // [ '146', 'access-faq-manager', 'seller', 'faq'],
            // [ '147', 'create_faqs', 'seller', 'faq'],
            // [ '148', 'edit_faqs', 'seller', 'faq'],
            // [ '149', 'delete_faqs', 'seller', 'faq'],

            // Report policy
            [ '151', 'access-reports', 'admin', 'report'],

            // System policy
            // [ '150', 'browse_system_config', 'admin', 'system'],

        ];

        $modelHasRoles = [
            [1, 'App\\User', 1],
            [4, 'App\\User', 2],
            [4, 'App\\User', 3],
        ];

        $roleHasPermissions = [
            
            [ 1, 4],
            [ 2, 4],
            [ 3, 4],
            [ 4, 4],
            [ 5, 4],
            [ 6, 4],
            [ 7, 4],
            // [ 8, 7],

            [ 9, 4],
            [ 10, 4],
            [ 11, 4],
            [ 12, 4],
            [ 13, 4],

            [ 14, 4],
            [ 15, 4],
            [ 16, 4],
            [ 17, 4],
            [ 18, 4],

            [ 19, 4],
            [ 20, 4],
            [ 21, 4],
            [ 22, 4],
            [ 23, 4],
            [ 24, 4],
            [ 25, 4],
            [ 26, 4],
            [ 27, 4],
            [ 28, 4],
            [ 29, 4],
            // [ 30, 7],
            // [ 31, 7],
            // [ 32, 7],
            // [ 33, 7],
            // [ 34, 7],
            // [ 35, 7],
            // [ 36, 7],
            // [ 37, 7],
            // [ 38, 7],
            // [ 39, 7],
            // [ 40, 7],

            [ 41, 4],
            [ 42, 4],
            [ 43, 4],
            [ 44, 4],
            [ 45, 4],
            [ 46, 4],
            [ 47, 4],
            [ 48, 4],
            [ 49, 4],
            [ 50, 4],
            // [ 51, 7],
            // [ 52, 7],
            // [ 53, 7],
            // [ 54, 7],
            // [ 55, 7],
            // [ 56, 7],
            // [ 57, 7],
            // [ 58, 7],
            // [ 59, 7],
            // [ 60, 7],

            [ 61, 4],
            [ 62, 4],
            [ 63, 4],
            [ 64, 4],
            [ 65, 4],
            // [ 66, 7],
            // [ 67, 7],
            // [ 68, 7],
            // [ 69, 7],
            // [ 70, 7],

            [ 71, 4],
            [ 72, 4],
            [ 73, 4],
            [ 74, 4],
            // [ 75, 7],
            // [ 76, 7],
            // [ 77, 7],
            // [ 78, 7],
            
            [ 79, 4],
            [ 80, 4],
            [ 81, 4],
            [ 82, 4],
            // [ 83, 7],
            // [ 84, 7],
            // [ 85, 7],
            // [ 86, 7],

            //[ '87', 4],
            //[ '88', 4],
            //[ '89', 4],
            //[ '90', 4],
            // [ 91, 7],
            // [ 92, 7],
            // [ 93, 7],
            // [ 94, 7],

            [ 95, 4],
            [ 96, 4],
            [ 97, 4],
            [ 98, 4],
            [ 99, 4],
            // [ 100, 7],
            // [ 101, 7],
            // [ 102, 7],
            // [ 103, 7],
            // [ 104, 7],

            //[ '105, 4],
            //[ '106, 4],
            //[ '107, 4],
            //[ '108, 4],
    
            //[ '109, 4],
            // [ 110, 7],

            [ 111, 4],
            [ 112, 4],
            [ 113, 4],
            [ 114, 4],
            [ 115, 4],
            // [ 116, 7],
            // [ 117, 7],
            // [ 118, 7],
            // [ 119, 7],
            // [ 120, 7],
            
            [ 121, 4],
            [ 122, 4],
            [ 123, 4],
            [ 124, 4],
            [ 125, 4],

            //[ '126, 4],
            //[ '127, 4],
            //[ '128, 4],
            //[ '129, 4],
            // [ 130, 7],
            // [ 131, 7],
            // [ 132, 7],
            // [ 133, 7],

            //[ '134, 4],
            //[ '135, 4],
            //[ '136, 4],
            //[ '137, 4],
            // [ 138, 7],
            // [ 139, 7],
            // [ 140, 7],
            // [ 141, 7],

            [ 142, 4],
            //[ '143, 4],
            //[ '144, 4],
            //[ '145, 4],
            // [ 146, 7],
            // [ 147, 7],
            // [ 148, 7],
            // [ 149, 7],

            //[ 150, 4],

            [ 151, 4],



        ];
        foreach($roles as $role){
            DB::table('roles')->insert(
            ['id'=>$role[0],'name'=>$role[1],'guard_name'=>$role[2],'created_at'=>$role[3],'updated_at'=>$role[4]]
            );
        }
        foreach($permissions as $permission){
            DB::table('permissions')->insert(
            ['id'=>$permission[0], 'name'=>$permission[1], 'guard_name'=>$permission[2], 'type'=>$permission[3]]
            );
        }
        foreach($modelHasRoles as $model_role){
            DB::table('model_has_roles')->insert(
            ['role_id'=>$model_role[0],'model_type'=>$model_role[1],'model_id'=>$model_role[2]]
            );
        }
        foreach($roleHasPermissions as $role_permission){
            DB::table('role_has_permissions')->insert(
            ['permission_id'=>$role_permission[0],'role_id'=>$role_permission[1]]
            );
        }
    }
}
