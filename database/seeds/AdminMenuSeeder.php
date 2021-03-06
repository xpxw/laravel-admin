<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array (
            0 => array(
                    'id' => 1,
                    'parent_id' => 0,
                    'name' => '后台首页',
                    'url' => 'admin/index/index',
                    'route_name' => 'admin.index.index',
                    'icon' => 'fa-home',
                    'is_show' => 1,
                    'sort_id' => 99,
                    'log_method' => '不记录',
                ),
            1 => array(
                    'id' => 2,
                    'parent_id' => 0,
                    'name' => '系统管理',
                    'url' => 'admin/sys',
                    'route_name' => '',
                    'icon' => 'fa-desktop',
                    'is_show' => 1,
                    'sort_id' => 1099,
                    'log_method' => '不记录',
                ),
            2 =>
 array(
                    'id' => 3,
                    'parent_id' => 2,
                    'name' => '用户管理',
                    'url' => 'admin/admin_user/index',
                    'route_name' => 'admin.admin_user.index',
                    'icon' => 'fa-user',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            3 =>
 array(
                    'id' => 4,
                    'parent_id' => 3,
                    'name' => '添加用户界面',
                    'url' => 'admin/admin_user/add',
                    'route_name' => 'admin.admin_user.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            4 =>
 array(
                    'id' => 5,
                    'parent_id' => 3,
                    'name' => '修改用户界面',
                    'url' => 'admin/admin_user/edit',
                    'route_name' => 'admin.admin_user.edit',
                    'icon' => 'fa-edit',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            5 =>
 array(
                    'id' => 6,
                    'parent_id' => 3,
                    'name' => '删除用户',
                    'url' => 'admin/admin_user/del',
                    'route_name' => 'admin.admin_user.del',
                    'icon' => 'fa-close',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            6 =>
 array(
                    'id' => 7,
                    'parent_id' => 2,
                    'name' => '角色管理',
                    'url' => 'admin/admin_role/index',
                    'route_name' => 'admin.admin_role.index',
                    'icon' => 'fa-group',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            7 =>
 array(
                    'id' => 8,
                    'parent_id' => 7,
                    'name' => '添加角色界面',
                    'url' => 'admin/admin_role/add',
                    'route_name' => 'admin.admin_role.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            8 =>
 array(
                    'id' => 9,
                    'parent_id' => 7,
                    'name' => '修改角色界面',
                    'url' => 'admin/admin_role/edit',
                    'route_name' => 'admin.admin_role.edit',
                    'icon' => 'fa-edit',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            9 =>
 array(
                    'id' => 10,
                    'parent_id' => 7,
                    'name' => '删除角色',
                    'url' => 'admin/admin_role/del',
                    'route_name' => 'admin.admin_role.del',
                    'icon' => 'fa-close',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            10 => array(
                    'id' => 11,
                    'parent_id' => 7,
                    'name' => '角色授权界面',
                    'url' => 'admin/admin_role/access',
                    'route_name' => 'admin.admin_role.access',
                    'icon' => 'fa-key',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            11 => array(
                    'id' => 12,
                    'parent_id' => 2,
                    'name' => '菜单管理',
                    'url' => 'admin/admin_menu/index',
                    'route_name' => 'admin.admin_menu.index',
                    'icon' => 'fa-align-justify',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            12 => array(
                    'id' => 13,
                    'parent_id' => 12,
                    'name' => '添加菜单界面',
                    'url' => 'admin/admin_menu/add',
                    'route_name' => 'admin.admin_menu.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            13 => array(
                    'id' => 14,
                    'parent_id' => 12,
                    'name' => '修改菜单界面',
                    'url' => 'admin/admin_menu/edit',
                    'route_name' => 'admin.admin_menu.edit',
                    'icon' => 'fa-edit',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            14 => array(
                    'id' => 15,
                    'parent_id' => 12,
                    'name' => '删除菜单',
                    'url' => 'admin/admin_menu/del',
                    'route_name' => 'admin.admin_menu.del',
                    'icon' => 'fa-close',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            15 => array(
                    'id' => 16,
                    'parent_id' => 2,
                    'name' => '操作日志',
                    'url' => 'admin/admin_log/index',
                    'route_name' => 'admin.admin_log.index',
                    'icon' => 'fa-keyboard-o',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            16 => array(
                    'id' => 17,
                    'parent_id' => 16,
                    'name' => '查看操作日志详情',
                    'url' => 'admin/admin_log/view',
                    'route_name' => 'admin.admin_log.view',
                    'icon' => 'fa-search-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            17 => array(
                    'id' => 18,
                    'parent_id' => 2,
                    'name' => '个人资料',
                    'url' => 'admin/admin_user/profile',
                    'route_name' => 'admin.admin_user.profile',
                    'icon' => 'fa-smile-o',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            18 => array(
                    'id' => 19,
                    'parent_id' => 0,
                    'name' => '用户管理',
                    'url' => 'admin/user/mange',
                    'route_name' => '',
                    'icon' => 'fa-users',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            19 => array(
                    'id' => 20,
                    'parent_id' => 19,
                    'name' => '用户管理',
                    'url' => 'admin/user/index',
                    'route_name' => 'admin.user.index',
                    'icon' => 'fa-user',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            20 => array(
                    'id' => 21,
                    'parent_id' => 20,
                    'name' => '添加用户界面',
                    'url' => 'admin/user/add',
                    'route_name' => 'admin.user.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            21 => array(
                    'id' => 22,
                    'parent_id' => 20,
                    'name' => '修改用户界面',
                    'url' => 'admin/user/edit',
                    'route_name' => 'admin.user.edit',
                    'icon' => 'fa-pencil',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            22 => array(
                    'id' => 23,
                    'parent_id' => 20,
                    'name' => '删除用户',
                    'url' => 'admin/user/del',
                    'route_name' => 'admin.user.del',
                    'icon' => 'fa-trash',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            23 => array(
                    'id' => 24,
                    'parent_id' => 20,
                    'name' => '启用用户',
                    'url' => 'admin/user/enable',
                    'route_name' => 'admin.user.enable',
                    'icon' => 'fa-circle',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            24 => array(
                    'id' => 25,
                    'parent_id' => 20,
                    'name' => '禁用用户',
                    'url' => 'admin/user/disable',
                    'route_name' => 'admin.user.disable',
                    'icon' => 'fa-circle',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            25 => array(
                    'id' => 26,
                    'parent_id' => 19,
                    'name' => '用户等级管理',
                    'url' => 'admin/user_level/index',
                    'route_name' => 'admin.user_level.index',
                    'icon' => 'fa-th-list',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            26 => array(
                    'id' => 27,
                    'parent_id' => 26,
                    'name' => '添加用户等级界面',
                    'url' => 'admin/user_level/add',
                    'route_name' => 'admin.user_level.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            27 => array(
                    'id' => 28,
                    'parent_id' => 26,
                    'name' => '修改用户等级界面',
                    'url' => 'admin/user_level/edit',
                    'route_name' => 'admin.user_level.edit',
                    'icon' => 'fa-pencil',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            28 => array(
                    'id' => 29,
                    'parent_id' => 26,
                    'name' => '删除用户等级',
                    'url' => 'admin/user_level/del',
                    'route_name' => 'admin.user_level.del',
                    'icon' => 'fa-trash',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            29 => array(
                    'id' => 30,
                    'parent_id' => 26,
                    'name' => '启用用户等级',
                    'url' => 'admin/user_level/enable',
                    'route_name' => 'admin.user_level.enable',
                    'icon' => 'fa-circle',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            30 => array(
                    'id' => 31,
                    'parent_id' => 26,
                    'name' => '禁用用户等级',
                    'url' => 'admin/user_level/disable',
                    'route_name' => 'admin.user_level.disable',
                    'icon' => 'fa-circle',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            31 => array(
                    'id' => 32,
                    'parent_id' => 2,
                    'name' => '开发管理',
                    'url' => 'admin/develop/manager',
                    'route_name' => '',
                    'icon' => 'fa-code',
                    'is_show' => 1,
                    'sort_id' => 1005,
                    'log_method' => '不记录',
                ),
            32 => array(
                    'id' => 34,
                    'parent_id' => 32,
                    'name' => '设置配置',
                    'url' => 'admin/develop/setting',
                    'route_name' => '',
                    'icon' => 'fa-cogs',
                    'is_show' => 1,
                    'sort_id' => 995,
                    'log_method' => '不记录',
                ),
            33 => array(
                    'id' => 35,
                    'parent_id' => 34,
                    'name' => '设置管理',
                    'url' => 'admin/setting/index',
                    'route_name' => 'admin.setting.index',
                    'icon' => 'fa-cog',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            34 => array(
                    'id' => 36,
                    'parent_id' => 35,
                    'name' => '添加设置界面',
                    'url' => 'admin/setting/add',
                    'route_name' => 'admin.setting.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            35 => array(
                    'id' => 37,
                    'parent_id' => 35,
                    'name' => '修改设置界面',
                    'url' => 'admin/setting/edit',
                    'route_name' => 'admin.setting.edit',
                    'icon' => 'fa-pencil',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            36 => array(
                    'id' => 38,
                    'parent_id' => 35,
                    'name' => '删除设置',
                    'url' => 'admin/setting/del',
                    'route_name' => 'admin.setting.del',
                    'icon' => 'fa-trash',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            37 => array(
                    'id' => 39,
                    'parent_id' => 34,
                    'name' => '设置分组管理',
                    'url' => 'admin/setting_group/index',
                    'route_name' => 'admin.setting_group.index',
                    'icon' => 'fa-list',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            38 => array(
                    'id' => 40,
                    'parent_id' => 39,
                    'name' => '添加设置分组界面',
                    'url' => 'admin/setting_group/add',
                    'route_name' => 'admin.setting_group.add',
                    'icon' => 'fa-plus',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            39 => array(
                    'id' => 41,
                    'parent_id' => 39,
                    'name' => '修改设置分组界面',
                    'url' => 'admin/setting_group/edit',
                    'route_name' => 'admin.setting_group.edit',
                    'icon' => 'fa-pencil',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            40 => array(
                    'id' => 42,
                    'parent_id' => 39,
                    'name' => '删除设置分组',
                    'url' => 'admin/setting_group/del',
                    'route_name' => 'admin.setting_group.del',
                    'icon' => 'fa-trash',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            41 => array(
                    'id' => 43,
                    'parent_id' => 0,
                    'name' => '设置中心',
                    'url' => 'admin/setting/center',
                    'route_name' => '',
                    'icon' => 'fa-cogs',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            42 => array(
                    'id' => 44,
                    'parent_id' => 43,
                    'name' => '所有配置',
                    'url' => 'admin/setting/all',
                    'route_name' => 'admin.setting.all',
                    'icon' => 'fa-list',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            43 => array(
                    'id' => 47,
                    'parent_id' => 43,
                    'name' => '后台设置',
                    'url' => 'admin/setting/admin',
                    'route_name' => 'admin.setting.admin',
                    'icon' => 'fa-adjust',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            44 => array(
                    'id' => 48,
                    'parent_id' => 43,
                    'name' => '更新设置',
                    'url' => 'admin/setting/update',
                    'route_name' => 'admin.setting.update',
                    'icon' => 'fa-pencil',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            45 => array(
                    'id' => 49,
                    'parent_id' => 32,
                    'name' => '数据维护',
                    'url' => 'admin/database/table',
                    'route_name' => 'admin.database.table',
                    'icon' => 'fa-database',
                    'is_show' => 1,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            46 => array(
                    'id' => 50,
                    'parent_id' => 49,
                    'name' => '查看表详情',
                    'url' => 'admin/database/view',
                    'route_name' => 'admin.database.view',
                    'icon' => 'fa-eye',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            47 => array(
                    'id' => 51,
                    'parent_id' => 49,
                    'name' => '优化表',
                    'url' => 'admin/database/optimize',
                    'route_name' => 'admin.database.optimize',
                    'icon' => 'fa-refresh',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            48 => array(
                    'id' => 52,
                    'parent_id' => 49,
                    'name' => '修复表',
                    'url' => 'admin/database/repair',
                    'route_name' => 'admin.database.repair',
                    'icon' => 'fa-circle-o-notch',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            49 => array(
                    'id' => 53,
                    'parent_id' => 20,
                    'name' => '创建用户',
                    'url' => 'admin/user/create',
                    'route_name' => 'admin.user.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            50 => array(
                    'id' => 54,
                    'parent_id' => 20,
                    'name' => '修改用户',
                    'url' => 'admin/user/update',
                    'route_name' => 'admin.user.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            51 => array(
                    'id' => 55,
                    'parent_id' => 3,
                    'name' => '修改头像',
                    'url' => 'admin/admin_user/update_avatar',
                    'route_name' => 'admin.admin_user.update_avatar',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            52 => array(
                    'id' => 56,
                    'parent_id' => 3,
                    'name' => '添加用户',
                    'url' => 'admin/admin_user/create',
                    'route_name' => 'admin.admin_user.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            53 => array(
                    'id' => 57,
                    'parent_id' => 3,
                    'name' => '修改用户',
                    'url' => 'admin/admin_user/update',
                    'route_name' => 'admin.admin_user.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            54 => array(
                    'id' => 58,
                    'parent_id' => 3,
                    'name' => '用户启用',
                    'url' => 'admin/admin_user/enable',
                    'route_name' => 'admin.admin_user.enable',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            55 => array(
                    'id' => 59,
                    'parent_id' => 3,
                    'name' => '用户禁用',
                    'url' => 'admin/admin_user/disable',
                    'route_name' => 'admin.admin_user.disable',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            56 => array(
                    'id' => 60,
                    'parent_id' => 3,
                    'name' => '修改昵称',
                    'url' => 'admin/admin_user/update_nickname',
                    'route_name' => 'admin.admin_user.update_nickname',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            57 => array(
                    'id' => 61,
                    'parent_id' => 3,
                    'name' => '修改密码',
                    'url' => 'admin/admin_user/update_password',
                    'route_name' => 'admin.admin_user.update_password',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            58 => array(
                    'id' => 62,
                    'parent_id' => 7,
                    'name' => '创建角色',
                    'url' => 'admin/admin_role/create',
                    'route_name' => 'admin.admin_role.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            59 => array(
                    'id' => 63,
                    'parent_id' => 7,
                    'name' => '修改角色',
                    'url' => 'admin/admin_role/update',
                    'route_name' => 'admin.admin_role.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            60 => array(
                    'id' => 64,
                    'parent_id' => 7,
                    'name' => '启用角色',
                    'url' => 'admin/admin_role/enable',
                    'route_name' => 'admin.admin_role.enable',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            61 => array(
                    'id' => 65,
                    'parent_id' => 7,
                    'name' => '禁用角色',
                    'url' => 'admin/admin_role/disable',
                    'route_name' => 'admin.admin_role.disable',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            62 => array(
                    'id' => 66,
                    'parent_id' => 7,
                    'name' => '角色授权',
                    'url' => 'admin/admin_role/access_operate',
                    'route_name' => 'admin.admin_role.access_operate',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            63 => array(
                    'id' => 67,
                    'parent_id' => 12,
                    'name' => '创建菜单',
                    'url' => 'admin/admin_menu/create',
                    'route_name' => 'admin.admin_menu.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            64 => array(
                    'id' => 68,
                    'parent_id' => 12,
                    'name' => '修改菜单',
                    'url' => 'admin/admin_menu/update',
                    'route_name' => 'admin.admin_menu.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            65 => array(
                    'id' => 69,
                    'parent_id' => 35,
                    'name' => '创建设置',
                    'url' => 'admin/setting/create',
                    'route_name' => 'admin.setting.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            66 => array(
                    'id' => 70,
                    'parent_id' => 35,
                    'name' => '修改设置',
                    'url' => 'admin/setting/do_update',
                    'route_name' => 'admin.setting.do_update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            67 => array(
                    'id' => 71,
                    'parent_id' => 47,
                    'name' => '修改设置',
                    'url' => 'admin/setting/info',
                    'route_name' => 'admin.setting.info',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            68 => array(
                    'id' => 72,
                    'parent_id' => 39,
                    'name' => '创建设置分组',
                    'url' => 'admin/setting_group/create',
                    'route_name' => 'admin.setting_group.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            69 => array(
                    'id' => 73,
                    'parent_id' => 39,
                    'name' => '修改设置',
                    'url' => 'admin/setting_group/update',
                    'route_name' => 'admin.setting_group.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            70 => array(
                    'id' => 74,
                    'parent_id' => 39,
                    'name' => '生成菜单',
                    'url' => 'admin/setting_group/menu',
                    'route_name' => 'admin.setting_group.menu',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            71 => array(
                    'id' => 75,
                    'parent_id' => 39,
                    'name' => '生成文件',
                    'url' => 'admin/setting_group/file',
                    'route_name' => 'admin.setting_group.file',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            72 => array(
                    'id' => 76,
                    'parent_id' => 20,
                    'name' => '导出用户',
                    'url' => 'admin/user/export',
                    'route_name' => 'admin.user.export',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
            73 => array(
                    'id' => 77,
                    'parent_id' => 26,
                    'name' => '创建用户等级',
                    'url' => 'admin.user_level.create',
                    'route_name' => 'admin.user_level.create',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            74 => array(
                    'id' => 78,
                    'parent_id' => 26,
                    'name' => '更新用户等级',
                    'url' => 'admin.user_level.update',
                    'route_name' => 'admin.user_level.update',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => 'POST',
                ),
            75 => array(
                    'id' => 79,
                    'parent_id' => 26,
                    'name' => '用户等级导出',
                    'url' => 'admin.user_level.export',
                    'route_name' => 'admin.user_level.export',
                    'icon' => 'fa-list',
                    'is_show' => 0,
                    'sort_id' => 1000,
                    'log_method' => '不记录',
                ),
        );
        DB::table('admin_menu')->insert($arr);
    }
}
