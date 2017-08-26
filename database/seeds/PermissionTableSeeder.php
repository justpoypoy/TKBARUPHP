<?php

/**
 * Created by PhpStorm.
 * User: GitzJoey
 * Date: 9/5/2016
 * Time: 10:19 PM
 */

use Illuminate\Database\Seeder;

use App\Model\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        /**
         *  Laratrust Permission Guide
         *  1. Format is [Permission]-[Module]
         *  2. Submodule separated by underscore, eg: create-module_submodule
         *  3. Standard permission is CRUD (Create, Read, Update, Delete)
         *  4. Custom Permission including
         *     - Menu -> Able to see the link on the sidebar
         *     - Reveal -> Reveal all the informations (no asterisk)
         */

        $permission = [
            // User
            [   'name' => 'create-user',
                'display_name' => '[User] Create User',
                'description' => 'Allowed To Create User Data' ],
            [   'name' => 'read-user',
                'display_name' => '[User] Read User',
                'description' => 'Allowed To Read User Data' ],
            [   'name' => 'update-user',
                'display_name' => '[User] Update User',
                'description' => 'Allowed To Update User Data' ],
            [   'name' => 'delete-user',
                'display_name' => '[User] Delete User',
                'description' => 'Allowed To Delete User Data' ],
            [   'name' => 'menu-user',
                'display_name' => '[User] Show Menu User',
                'description' => 'Allowed To See Menu User In Sidebar' ],
            // Role
            [   'name' => 'create-role',
                'display_name' => '[Role] Create Role',
                'description' => 'Allowed To Create Role Data' ],
            [   'name' => 'read-role',
                'display_name' => '[Role] Read Role',
                'description' => 'Allowed To Read Role Data' ],
            [   'name' => 'update-role',
                'display_name' => '[Role] Update Role',
                'description' => 'Allowed To Update Role Data' ],
            [   'name' => 'delete-role',
                'display_name' => '[Role] Delete Role',
                'description' => 'Allowed To Delete Role Data' ],
            [   'name' => 'menu-role',
                'display_name' => '[Role] Show Menu Role',
                'description' => 'Allowed To See Menu Role In Sidebar' ],
            // Store
            [   'name' => 'create-store',
                'display_name' => '[Store] Create Store',
                'description' => 'Allowed To Create Store Data' ],
            [   'name' => 'read-store',
                'display_name' => '[Store] Read Store',
                'description' => 'Allowed To Read Store Data' ],
            [   'name' => 'update-store',
                'display_name' => '[Store] Update Store',
                'description' => 'Allowed To Update Store Data' ],
            [   'name' => 'delete-store',
                'display_name' => '[Store] Delete Store',
                'description' => 'Allowed To Delete Store Data' ],
            [   'name' => 'menu-store',
                'display_name' => '[Store] Show Menu Store',
                'description' => 'Allowed To See Menu Store In Sidebar' ],
            // Unit
            [   'name' => 'create-unit',
                'display_name' => '[Unit] Create Unit',
                'description' => 'Allowed To Create Unit Data' ],
            [   'name' => 'read-unit',
                'display_name' => '[Unit] Read Unit',
                'description' => 'Allowed To Read Unit Data' ],
            [   'name' => 'update-unit',
                'display_name' => '[Unit] Update Unit',
                'description' => 'Allowed To Update Unit Data' ],
            [   'name' => 'delete-unit',
                'display_name' => '[Unit] Delete Unit',
                'description' => 'Allowed To Delete Unit Data' ],
            [   'name' => 'menu-unit',
                'display_name' => '[Unit] Show Menu Unit',
                'description' => 'Allowed To See Menu Unit In Sidebar' ],
            // Currencies
            [   'name' => 'create-currencies',
                'display_name' => '[Currencies] Create Currencies',
                'description' => 'Allowed To Create Currencies Data' ],
            [   'name' => 'read-currencies',
                'display_name' => '[Currencies] Read Currencies',
                'description' => 'Allowed To Read Currencies Data' ],
            [   'name' => 'update-currencies',
                'display_name' => '[Currencies] Update Currencies',
                'description' => 'Allowed To Update Currencies Data' ],
            [   'name' => 'delete-currencies',
                'display_name' => '[Currencies] Delete Currencies',
                'description' => 'Allowed To Delete Currencies Data' ],
            [   'name' => 'menu-currencies',
                'display_name' => '[Currencies] Show Menu Currencies',
                'description' => 'Allowed To See Menu Currencies In Sidebar' ],
            // Settings
            [   'name' => 'read-settings',
                'display_name' => '[Settings] Read Settings',
                'description' => 'Allowed To Read Settings Data' ],
            [   'name' => 'update-settings',
                'display_name' => '[Settings] Update Settings',
                'description' => 'Allowed To Update Settings Data' ],
            // Phone Provider
            [   'name' => 'create-phoneprovider',
                'display_name' => '[Phone Provider] Create Phone Provider',
                'description' => 'Allowed To Create Phone Provider Data' ],
            [   'name' => 'read-phoneprovider',
                'display_name' => '[Phone Provider] Read Phone Provider',
                'description' => 'Allowed To Read Phone Provider Data' ],
            [   'name' => 'update-phoneprovider',
                'display_name' => '[Phone Provider] Update Phone Provider',
                'description' => 'Allowed To Update Phone Provider Data' ],
            [   'name' => 'delete-phoneprovider',
                'display_name' => '[Phone Provider] Delete Phone Provider',
                'description' => 'Allowed To Delete Phone Provider Data' ],
            [   'name' => 'menu-phoneprovider',
                'display_name' => '[Phone Provider] Show Menu Phone Provider',
                'description' => 'Allowed To See Menu Phone Provider In Sidebar' ],
            // Customer
            [   'name' => 'create-customer',
                'display_name' => '[Customer] Create Customer',
                'description' => 'Allowed To Create Customer Data' ],
            [   'name' => 'read-customer',
                'display_name' => '[Customer] Read Customer',
                'description' => 'Allowed To Read Customer Data' ],
            [   'name' => 'update-customer',
                'display_name' => '[Customer] Update Customer',
                'description' => 'Allowed To Update Customer Data' ],
            [   'name' => 'delete-customer',
                'display_name' => '[Customer] Delete Customer',
                'description' => 'Allowed To Delete Customer Data' ],
            [   'name' => 'menu-customer',
                'display_name' => '[Customer] Show Menu Customer',
                'description' => 'Allowed To See Menu Customer In Sidebar' ],
            // Supplier
            [   'name' => 'create-supplier',
                'display_name' => '[Supplier] Create Supplier',
                'description' => 'Allowed To Create Supplier Data' ],
            [   'name' => 'read-supplier',
                'display_name' => '[Supplier] Read Supplier',
                'description' => 'Allowed To Read Supplier Data' ],
            [   'name' => 'update-supplier',
                'display_name' => '[Supplier] Update Supplier',
                'description' => 'Allowed To Update Supplier Data' ],
            [   'name' => 'delete-supplier',
                'display_name' => '[Supplier] Delete Supplier',
                'description' => 'Allowed To Delete Supplier Data' ],
            [   'name' => 'menu-supplier',
                'display_name' => '[Supplier] Show Menu Supplier',
                'description' => 'Allowed To See Menu Supplier In Sidebar' ],
            // Product
            [   'name' => 'create-product',
                'display_name' => '[Product] Create Product',
                'description' => 'Allowed To Create Product Data' ],
            [   'name' => 'read-product',
                'display_name' => '[Product] Read Product',
                'description' => 'Allowed To Read Product Data' ],
            [   'name' => 'update-product',
                'display_name' => '[Product] Update Product',
                'description' => 'Allowed To Update Product Data' ],
            [   'name' => 'delete-product',
                'display_name' => '[Product] Delete Product',
                'description' => 'Allowed To Delete Product Data' ],
            [   'name' => 'menu-product',
                'display_name' => '[Product] Show Menu Product',
                'description' => 'Allowed To See Menu Product In Sidebar' ],
            // Product Type
            [   'name' => 'create-producttype',
                'display_name' => '[Product Type] Create Product Type',
                'description' => 'Allowed To Create Product Type Data' ],
            [   'name' => 'read-producttype',
                'display_name' => '[Product Type] Read Product Type',
                'description' => 'Allowed To Read Product Type Data' ],
            [   'name' => 'update-producttype',
                'display_name' => '[Product Type] Update Product Type',
                'description' => 'Allowed To Update Product Type Data' ],
            [   'name' => 'delete-producttype',
                'display_name' => '[Product Type] Delete Product Type',
                'description' => 'Allowed To Delete Product Type Data' ],
            [   'name' => 'menu-producttype',
                'display_name' => '[Product Type] Show Menu Product Type',
                'description' => 'Allowed To See Menu Product Type In Sidebar' ],
            // Employee
            [   'name' => 'create-employee',
                'display_name' => '[Employee] Create Employee',
                'description' => 'Allowed To Create Employee Data' ],
            [   'name' => 'read-employee',
                'display_name' => '[Employee] Read Employee',
                'description' => 'Allowed To Read Employee Data' ],
            [   'name' => 'update-employee',
                'display_name' => '[Employee] Update Employee',
                'description' => 'Allowed To Update Employee Data' ],
            [   'name' => 'delete-employee',
                'display_name' => '[Employee] Delete Employee',
                'description' => 'Allowed To Delete Employee Data' ],
            [   'name' => 'menu-employee',
                'display_name' => '[Employee] Show Menu Employee',
                'description' => 'Allowed To See Menu Employee In Sidebar' ],
            // Employee Salary
            [   'name' => 'create-employeesalary',
                'display_name' => '[Employee Salary] Create Employee Salary',
                'description' => 'Allowed To Create Employee Salary Data' ],
            [   'name' => 'read-employeesalary',
                'display_name' => '[Employee Salary] Read Employee Salary',
                'description' => 'Allowed To Read Employee Salary Data' ],
            [   'name' => 'update-employeesalary',
                'display_name' => '[Employee Salary] Update Employee Salary',
                'description' => 'Allowed To Update Employee Salary Data' ],
            [   'name' => 'delete-employeesalary',
                'display_name' => '[Employee Salary] Delete Employee Salary',
                'description' => 'Allowed To Delete Employee Salary Data' ],
            [   'name' => 'menu-employeesalary',
                'display_name' => '[Employee Salary] Show Menu Employee Salary',
                'description' => 'Allowed To See Menu Employee Salary In Sidebar' ],
            // Warehouse
            [   'name' => 'create-warehouse',
                'display_name' => '[Warehouse] Create Warehouse',
                'description' => 'Allowed To Create Warehouse Data' ],
            [   'name' => 'read-warehouse',
                'display_name' => '[Warehouse] Read Warehouse',
                'description' => 'Allowed To Read Warehouse Data' ],
            [   'name' => 'update-warehouse',
                'display_name' => '[Warehouse] Update Warehouse',
                'description' => 'Allowed To Update Warehouse Data' ],
            [   'name' => 'delete-warehouse',
                'display_name' => '[Warehouse] Delete Warehouse',
                'description' => 'Allowed To Delete Warehouse Data' ],
            [   'name' => 'menu-warehouse',
                'display_name' => '[Warehouse] Show Menu Warehouse',
                'description' => 'Allowed To See Menu Warehouse In Sidebar' ],
            // Bank
            [   'name' => 'create-bank',
                'display_name' => '[Bank] Create Bank',
                'description' => 'Allowed To Create Bank Data' ],
            [   'name' => 'read-bank',
                'display_name' => '[Bank] Read Bank',
                'description' => 'Allowed To Read Bank Data' ],
            [   'name' => 'update-bank',
                'display_name' => '[Bank] Update Bank',
                'description' => 'Allowed To Update Bank Data' ],
            [   'name' => 'delete-bank',
                'display_name' => '[Bank] Delete Bank',
                'description' => 'Allowed To Delete Bank Data' ],
            [   'name' => 'menu-bank',
                'display_name' => '[Bank] Show Menu Bank',
                'description' => 'Allowed To See Menu Bank In Sidebar' ],
            // Truck
            [   'name' => 'create-truck',
                'display_name' => '[Truck] Create Truck',
                'description' => 'Allowed To Create Truck Data' ],
            [   'name' => 'read-truck',
                'display_name' => '[Truck] Read Truck',
                'description' => 'Allowed To Read Truck Data' ],
            [   'name' => 'update-truck',
                'display_name' => '[Truck] Update Truck',
                'description' => 'Allowed To Update Truck Data' ],
            [   'name' => 'delete-truck',
                'display_name' => '[Truck] Delete Truck',
                'description' => 'Allowed To Delete Truck Data' ],
            [   'name' => 'menu-truck',
                'display_name' => '[Truck] Show Menu Truck',
                'description' => 'Allowed To See Menu Truck In Sidebar' ],
            // Vendor -> Trucking
            [   'name' => 'create-vendortrucking',
                'display_name' => '[Vendor Trucking] Create Vendor Trucking',
                'description' => 'Allowed To Create Vendor Trucking Data' ],
            [   'name' => 'read-vendortrucking',
                'display_name' => '[Vendor Trucking] Read Vendor Trucking',
                'description' => 'Allowed To Read Vendor Trucking Data' ],
            [   'name' => 'update-vendortrucking',
                'display_name' => '[Vendor Trucking] Update Vendor Trucking',
                'description' => 'Allowed To Update Vendor Trucking Data' ],
            [   'name' => 'delete-vendortrucking',
                'display_name' => '[Vendor Trucking] Delete Vendor Trucking',
                'description' => 'Allowed To Delete Vendor Trucking Data' ],
            [   'name' => 'menu-vendortrucking',
                'display_name' => '[Vendor Trucking] Show Menu Vendor Trucking',
                'description' => 'Allowed To See Menu Vendor Trucking In Sidebar' ],
            // Expense Template
            [   'name' => 'create-expensetemplate',
                'display_name' => '[Expense Template] Create Expense Template',
                'description' => 'Allowed To Create Expense Template Data' ],
            [   'name' => 'read-expensetemplate',
                'display_name' => '[Expense Template] Read Expense Template',
                'description' => 'Allowed To Read Expense Template Data' ],
            [   'name' => 'update-expensetemplate',
                'display_name' => '[Expense Template] Update Expense Template',
                'description' => 'Allowed To Update Expense Template Data' ],
            [   'name' => 'delete-expensetemplate',
                'display_name' => '[Expense Template] Delete Expense Template',
                'description' => 'Allowed To Delete Expense Template Data' ],
            [   'name' => 'menu-expensetemplate',
                'display_name' => '[Expense Template] Show Menu Expense Template',
                'description' => 'Allowed To See Menu Expense Template In Sidebar' ],
            // Purchase Order
            [   'name' => 'create-purchaseorder',
                'display_name' => '[Purchase Order] Create Purchase Order',
                'description' => 'Allowed To Create Purchase Order Data' ],
            [   'name' => 'read-purchaseorder',
                'display_name' => '[Purchase Order] Read Purchase Order',
                'description' => 'Allowed To Read Purchase Order Data' ],
            [   'name' => 'update-purchaseorder',
                'display_name' => '[Purchase Order] Update Purchase Order',
                'description' => 'Allowed To Update Purchase Order Data' ],
            [   'name' => 'menu-purchaseorder_create',
                'display_name' => '[Purchase Order] Show Menu Purchase Order Create',
                'description' => 'Allowed To See Menu Purchase Order Create In Sidebar' ],
            [   'name' => 'menu-purchaseorder_update',
                'display_name' => '[Purchase Order] Show Menu Purchase Order Update',
                'description' => 'Allowed To See Menu Purchase Order Update In Sidebar' ],
            // PO Payment
            [   'name' => 'read-popayment',
                'display_name' => '[PO Payment] Read Purchase Order Payment',
                'description' => 'Allowed To Read Purchase Order Payment Data' ],
            [   'name' => 'menu-popayment',
                'display_name' => '[PO Payment] Show Menu Purchase Order Payment',
                'description' => 'Allowed To See Menu Purchase Order Payment In Sidebar' ],
            // PO Payment Cash
            [   'name' => 'create-popaymentcash',
                'display_name' => '[PO Payment Cash] Create Cash Payment For Purchase Order',
                'description' => 'Allowed To Create Cash Payment For Purchase Order Data' ],
            // PO Payment Transfer
            [   'name' => 'create-popaymenttransfer',
                'display_name' => '[PO Payment Transfer] Create Transfer Payment For Purchase Order',
                'description' => 'Allowed To Create Transfer Payment For Purchase Order Data' ],
            // PO Payment Giro
            [   'name' => 'create-popaymentgiro',
                'display_name' => '[PO Payment Giro] Create Giro Payment For Purchase Order',
                'description' => 'Allowed To Create Giro Payment For Purchase Order Data' ],
            // PO Copy
            [   'name' => 'create-pocopy',
                'display_name' => '[PO Copy] Create Purchase Order Copy',
                'description' => 'Allowed To Create Purchase Order Copy Data' ],
            [   'name' => 'read-pocopy',
                'display_name' => '[PO Copy] Read Purchase Order Copy',
                'description' => 'Allowed To Read Purchase Order Copy Data' ],
            [   'name' => 'update-pocopy',
                'display_name' => '[PO Copy] Update Purchase Order Copy',
                'description' => 'Allowed To Update Purchase Order Copy Data' ],
            [   'name' => 'delete-pocopy',
                'display_name' => '[PO Copy] Delete Purchase Order Copy',
                'description' => 'Allowed To Delete Purchase Order Copy Data' ],
            [   'name' => 'menu-pocopy',
                'display_name' => '[PO Copy] Show Menu Purchase Order Copy',
                'description' => 'Allowed To See Menu Purchase Order Copy In Sidebar' ],
            // Sales Order
            [   'name' => 'create-salesorder',
                'display_name' => '[Sales Order] Create Sales Order',
                'description' => 'Allowed To Create Sales Order Data' ],
            [   'name' => 'read-salesorder',
                'display_name' => '[Sales Order] Read Sales Order',
                'description' => 'Allowed To Read Sales Order Data' ],
            [   'name' => 'update-salesorder',
                'display_name' => '[Sales Order] Update Sales Order',
                'description' => 'Allowed To Update Sales Order Data' ],
            [   'name' => 'menu-salesorder_create',
                'display_name' => '[Sales Order] Show Menu Sales Order Create',
                'description' => 'Allowed To See Menu Sales Order Create In Sidebar' ],
            [   'name' => 'menu-salesorder_update',
                'display_name' => '[Sales Order] Show Menu Sales Order Update',
                'description' => 'Allowed To See Menu Sales Order Update In Sidebar' ],
            // SO Payment
            [   'name' => 'read-sopayment',
                'display_name' => '[SO Payment] Read Sales Order Payment',
                'description' => 'Allowed To Read Sales Order Payment Data' ],
            [   'name' => 'menu-sopayment',
                'display_name' => '[SO Payment] Show Menu Sales Order Payment',
                'description' => 'Allowed To See Menu Sales Order Payment In Sidebar' ],
            // SO Payment Cash
            [   'name' => 'create-sopaymentcash',
                'display_name' => '[SO Payment Cash] Create Cash Payment For Sales Order',
                'description' => 'Allowed To Create Cash Payment For Sales Order Data' ],
            // SO Payment Transfer
            [   'name' => 'create-sopaymenttransfer',
                'display_name' => '[SO Payment Transfer] Create Transfer Payment For Sales Order',
                'description' => 'Allowed To Create Transfer Payment For Sales Order Data' ],
            // SO Payment Giro
            [   'name' => 'create-sopaymentgiro',
                'display_name' => '[SO Payment Giro] Create Giro Payment For Sales Order',
                'description' => 'Allowed To Create Giro Payment For Sales Order Data' ],
            // SO Copy
            [   'name' => 'create-socopy',
                'display_name' => '[SO Copy] Create Sales Order Copy',
                'description' => 'Allowed To Create Sales Order Copy Data' ],
            [   'name' => 'read-socopy',
                'display_name' => '[SO Copy] Read Sales Order Copy',
                'description' => 'Allowed To Read Sales Order Copy Data' ],
            [   'name' => 'update-socopy',
                'display_name' => '[SO Copy] Update Sales Order Copy',
                'description' => 'Allowed To Update Sales Order Copy Data' ],
            [   'name' => 'delete-socopy',
                'display_name' => '[SO Copy] Delete Sales Order Copy',
                'description' => 'Allowed To Delete Sales Order Copy Data' ],
            [   'name' => 'menu-socopy',
                'display_name' => '[SO Copy] Show Menu Sales Order Copy',
                'description' => 'Allowed To See Menu Sales Order Copy In Sidebar' ],
            // Today Price
            [   'name' => 'create-todayprice',
                'display_name' => '[Today Price] Create Today Price',
                'description' => 'Allowed To Create Today Price Data' ],
            [   'name' => 'read-todayprice',
                'display_name' => '[Today Price] Read Today Price',
                'description' => 'Allowed To Read Today Price Data' ],
            [   'name' => 'menu-todayprice',
                'display_name' => '[Today Price] Show Menu Today Price',
                'description' => 'Allowed To See Menu Today Price In Sidebar' ],
            // Price Level
            [   'name' => 'create-pricelevel',
                'display_name' => '[Price Level] Create Price Level',
                'description' => 'Allowed To Create Price Level Data' ],
            [   'name' => 'read-pricelevel',
                'display_name' => '[Price Level] Read Price Level',
                'description' => 'Allowed To Read Price Level Data' ],
            [   'name' => 'update-pricelevel',
                'display_name' => '[Price Level] Update Price Level',
                'description' => 'Allowed To Update Price Level Data' ],
            [   'name' => 'delete-pricelevel',
                'display_name' => '[Price Level] Delete Price Level',
                'description' => 'Allowed To Delete Price Level Data' ],
            [   'name' => 'menu-pricelevel',
                'display_name' => '[Price Level] Show Menu Price Level',
                'description' => 'Allowed To See Menu Price Level In Sidebar' ],
            // Warehouse -> Inflow
            [   'name' => 'create-warehouse_inflow',
                'display_name' => '[Warehouse Inflow] Create Warehouse Inflow',
                'description' => 'Allowed To Create Warehouse Inflow Data' ],
            [   'name' => 'read-warehouse_inflow',
                'display_name' => '[Warehouse Inflow] Read Warehouse Inflow',
                'description' => 'Allowed To Read Warehouse Inflow Data' ],
            [   'name' => 'menu-warehouse_inflow',
                'display_name' => '[Warehouse Inflow] Show Menu Warehouse Inflow',
                'description' => 'Allowed To See Menu Warehouse Inflow In Sidebar' ],
            // Warehouse -> Outflow
            [   'name' => 'create-warehouse_outflow',
                'display_name' => '[Warehouse Outflow] Create Warehouse Outflow',
                'description' => 'Allowed To Create Warehouse Outflow Data' ],
            [   'name' => 'read-warehouse_outflow',
                'display_name' => '[Warehouse Outflow] Read Warehouse Outflow',
                'description' => 'Allowed To Read Warehouse Outflow Data' ],
            [   'name' => 'menu-warehouse_outflow',
                'display_name' => '[Warehouse Outflow] Show Menu Warehouse Outflow',
                'description' => 'Allowed To See Menu Warehouse Outflow In Sidebar' ],
            // Warehouse -> Stock Opname
            [   'name' => 'create-warehouse_stockopname',
                'display_name' => '[Warehouse Stock Opname] Create Warehouse Stock Opname',
                'description' => 'Allowed To Create Warehouse Stock Opname Data' ],
            [   'name' => 'read-warehouse_stockopname',
                'display_name' => '[Warehouse Stock Opname] Read Warehouse Stock Opname',
                'description' => 'Allowed To Read Warehouse Stock Opname Data' ],
            [   'name' => 'menu-warehouse_stockopname',
                'display_name' => '[Warehouse Stock Opname] Show Menu Warehouse Stock Opname',
                'description' => 'Allowed To See Menu Warehouse Stock Opname In Sidebar' ],
            // Warehouse -> Transfer Stock
            [   'name' => 'create-warehouse_transferstock',
                'display_name' => '[Warehouse Transfer Stock] Create Warehouse Transfer Stock',
                'description' => 'Allowed To Create Warehouse Transfer Stock Data' ],
            [   'name' => 'read-warehouse_transferstock',
                'display_name' => '[Warehouse Transfer Stock] Read Warehouse Transfer Stock',
                'description' => 'Allowed To Read Warehouse Transfer Stock Data' ],
            [   'name' => 'menu-warehouse_transferstock',
                'display_name' => '[Warehouse Transfer Stock] Show Menu Warehouse Transfer Stock',
                'description' => 'Allowed To See Menu Warehouse Transfer Stock In Sidebar' ],
            // Bank -> Upload
            [   'name' => 'create-bank_upload',
                'display_name' => '[Bank Upload] Create Bank Upload',
                'description' => 'Allowed To Create Bank Upload Data' ],
            [   'name' => 'read-bank_upload',
                'display_name' => '[Bank Upload] Read Bank Upload',
                'description' => 'Allowed To Read Bank Upload Data' ],
            [   'name' => 'menu-bank_upload',
                'display_name' => '[Bank Upload] Show Menu Bank Upload',
                'description' => 'Allowed To See Menu Bank Upload In Sidebar' ],
            // Bank -> Consolidate
            [   'name' => 'menu-bank_consolidate',
                'display_name' => '[Bank Consolidate] Show Menu Bank Consolidate',
                'description' => 'Allowed To See Menu Bank Consolidate In Sidebar' ],
            // Bank -> Giro
            [   'name' => 'create-bank_giro',
                'display_name' => '[Bank Giro] Create Bank Giro',
                'description' => 'Allowed To Create Bank Giro Data' ],
            [   'name' => 'read-bank_giro',
                'display_name' => '[Bank Giro] Read Bank Giro',
                'description' => 'Allowed To Read Bank Giro Data' ],
            [   'name' => 'update-bank_giro',
                'display_name' => '[Bank Giro] Update Bank Giro',
                'description' => 'Allowed To Update Bank Giro Data' ],
            [   'name' => 'delete-bank_giro',
                'display_name' => '[Bank Giro] Delete Bank Giro',
                'description' => 'Allowed To Delete Bank Giro Data' ],
            [   'name' => 'menu-bank_giro',
                'display_name' => '[Bank Giro] Show Menu Bank Giro',
                'description' => 'Allowed To See Menu Bank Giro In Sidebar' ],
            // Truck -> Maintenance
            [   'name' => 'create-truck_maintenance',
                'display_name' => '[Truck Maintenance] Create Truck Maintenance',
                'description' => 'Allowed To Create Truck Maintenance Data' ],
            [   'name' => 'read-truck_maintenance',
                'display_name' => '[Truck Maintenance] Read Truck Maintenance',
                'description' => 'Allowed To Read Truck Maintenance Data' ],
            [   'name' => 'update-truck_maintenance',
                'display_name' => '[Truck Maintenance] Update Truck Maintenance',
                'description' => 'Allowed To Update Truck Maintenance Data' ],
            [   'name' => 'delete-truck_maintenance',
                'display_name' => '[Truck Maintenance] Delete Truck Maintenance',
                'description' => 'Allowed To Delete Truck Maintenance Data' ],
            [   'name' => 'menu-truck_maintenance',
                'display_name' => '[Truck Maintenance] Show Menu Truck Maintenance',
                'description' => 'Allowed To See Menu Truck Maintenance In Sidebar' ],
            // Report -> Transaction
            [   'name' => 'menu-report_transaction',
                'display_name' => '[Report Transaction] Show Menu Report Transaction',
                'description' => 'Allowed To See Menu Report Transaction In Sidebar' ],
            // Report -> Monitoring
            [   'name' => 'menu-report_monitoring',
                'display_name' => '[Report Monitoring] Show Menu Report Monitoring',
                'description' => 'Allowed To See Menu Report Monitoring In Sidebar' ],
            [   'name' => 'report_monitoring-stockhistory',
                'display_name' => '[Report Monitoring] Show Tab Stock History',
                'description' => 'Allowed To See Stock History' ],
            // Report -> Tax
            [   'name' => 'menu-report_tax',
                'display_name' => '[Report Tax] Show Menu Report Tax',
                'description' => 'Allowed To See Menu Report Tax In Sidebar' ],
            // Report -> Master
            [   'name' => 'menu-report_master',
                'display_name' => '[Report Master] Show Menu Report Master',
                'description' => 'Allowed To See Menu Report Master In Sidebar' ],
            // Report -> Admin
            [   'name' => 'menu-report_admin',
                'display_name' => '[Report Admin] Show Menu Report Admin',
                'description' => 'Allowed To See Menu Report Admin In Sidebar' ],
            // Customer -> Confirmation
            [   'name' => 'menu-customer_confirmation',
                'display_name' => '[Customer Confirmation] Show Menu Customer Confirmation',
                'description' => 'Allowed To See Menu Customer Confirmation In Sidebar' ],
            // Customer -> Payment
            [   'name' => 'menu-customer_payment',
                'display_name' => '[Customer Payment] Show Menu Customer Payment',
                'description' => 'Allowed To See Menu Customer Payment In Sidebar' ],
            // Customer -> Approval
            [   'name' => 'menu-customer_approval',
                'display_name' => '[Customer Approval] Show Menu Customer Approval',
                'description' => 'Allowed To See Menu Customer Approval In Sidebar' ],
            // Tax Output
            [   'name' => 'create-tax-output',
                'display_name' => '[Tax] Create Tax Output',
                'description' => 'Allowed To Create Tax Output Data' ],
            [   'name' => 'read-tax-output',
                'display_name' => '[Tax] Read Tax Output',
                'description' => 'Allowed To Read Tax Output Data' ],
            [   'name' => 'update-tax-output',
                'display_name' => '[Tax] Update Tax Output',
                'description' => 'Allowed To Update Tax Output Data' ],
            [   'name' => 'delete-tax-output',
                'display_name' => '[Tax] Delete Tax Output',
                'description' => 'Allowed To Delete Tax Output Data' ],
            [   'name' => 'menu-tax-output',
                'display_name' => '[Tax] Show Menu Tax Output',
                'description' => 'Allowed To See Menu Tax Output In Sidebar' ],
            // Tax Input
            [   'name' => 'create-tax-input',
                'display_name' => '[Tax] Create Tax Input',
                'description' => 'Allowed To Create Tax Input Data' ],
            [   'name' => 'read-tax-input',
                'display_name' => '[Tax] Read Tax Input',
                'description' => 'Allowed To Read Tax Input Data' ],
            [   'name' => 'update-tax-input',
                'display_name' => '[Tax] Update Tax Input',
                'description' => 'Allowed To Update Tax Input Data' ],
            [   'name' => 'delete-tax-input',
                'display_name' => '[Tax] Delete Tax Input',
                'description' => 'Allowed To Delete Tax Input Data' ],
            [   'name' => 'menu-tax-input',
                'display_name' => '[Tax] Show Menu Tax Input',
                'description' => 'Allowed To See Menu Tax Input In Sidebar' ],
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}