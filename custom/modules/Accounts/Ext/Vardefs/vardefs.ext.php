<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-11-11 10:52:08
$dictionary["Account"]["fields"]["accounts_project_1"] = array (
  'name' => 'accounts_project_1',
  'type' => 'link',
  'relationship' => 'accounts_project_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE',
);



$dictionary['Account']['fields']['gst_number'] = [
    'name' =>'gst_number',
    'vname' => 'LBL_GST_NUMBER',
    'type' => 'varchar',
    'len' => 30,
];

// created: 2025-11-11 17:28:38
$dictionary["Account"]["fields"]["vend1_vendors_accounts"] = array (
  'name' => 'vend1_vendors_accounts',
  'type' => 'link',
  'relationship' => 'vend1_vendors_accounts',
  'source' => 'non-db',
  'module' => 'vend1_Vendors',
  'bean_name' => false,
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_VEND1_VENDORS_TITLE',
  'id_name' => 'vend1_vendors_accountsvend1_vendors_ida',
);
$dictionary["Account"]["fields"]["vend1_vendors_accounts_name"] = array (
  'name' => 'vend1_vendors_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_VEND1_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'vend1_vendors_accountsvend1_vendors_ida',
  'link' => 'vend1_vendors_accounts',
  'table' => 'vend1_vendors',
  'module' => 'vend1_Vendors',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["vend1_vendors_accountsvend1_vendors_ida"] = array (
  'name' => 'vend1_vendors_accountsvend1_vendors_ida',
  'type' => 'link',
  'relationship' => 'vend1_vendors_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);


 // created: 2025-11-11 10:44:15
$dictionary['Account']['fields']['customer_type_c']['inline_edit']='1';
$dictionary['Account']['fields']['customer_type_c']['labelValue']='customer type';

 

 // created: 2025-11-11 08:30:16
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-11-11 08:30:16
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-11-11 08:30:15
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-11-11 08:30:15
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>