<?php
//Plugin modified for LIS462-20, Simmons SLIS West Digital Libraries class, Spring 2016. Forked from CUL LDPD profile MODS, adapted to flat representation in Omeka
$elements = array(    
array(
	'name' => 'MODS:Part_Type',
	'description' => 'Type of part (ex. page)',
),
    
array(
	'name' => 'MODS:Part_Order',
	'description' => 'Part order (integer)',
),
    
array(
	'name' => 'MODS:Name_Type',
	'description' => 'Name Type (personal, corporate, conference, family)',
),
    
array(
	'name' => 'MODS:Name_NamePart_Date',
	'description' => 'Name Dates (Birth Year--Death Year)',
),
    
array(
	'name' => 'MODS:Name_NamePart_Authority',
	'description' => 'Name Authority',
),
    
array(
	'name' => 'MODS:Name_Role_RoleTerm',
	'description' => 'Role of named entity; use marc relator vocabulary',
),
    
array(
	'name' => 'MODS:Name_Role_RoleTerm_Type',
	'description' => 'RoleTerm type (text or code)',
),
    
array(
	'name' => 'MODS:Name_Role_RoleTerm_Authority',
	'description' => 'Role Authority or Code Source',
),
    
array(
	'name' => 'MODS:Genre',
	'description' => 'A term or terms that designate a category characterizing a particular style, form, or content, such as artistic, musical, literary composition, etc.',
),
    
array(
	'name' => 'MODS:Genre_Authority',
	'description' => 'Use AAT',
),
    
array(
	'name' => 'MODS:OriginInfo_DateCreated_KeyDate',
	'description' => 'Yes or No; only one date may be chosen as Key Date=Yes.',
),
    
array(
	'name' => 'MODS:OriginInfo_DateCreated_Encoding',
	'description' => 'Date encoding',
),
    
array(
	'name' => 'MODS:OriginInfo_DateCaptured',
	'description' => 'Date digitized',
),
    
array(
	'name' => 'MODS:OriginInfo_DateCaptured_Encoding',
	'description' => 'Date encoding',
),
    
array(
	'name' => 'MODS:OriginInfo:Location',
	'description' => 'Repository Address',
),
    
array(
	'name' => 'MODS:OriginInfo:RepositoryName',
	'description' => 'Repository Name',
),
    
array(
	'name' => 'MODS:Language_LanguageTerm',
	'description' => 'Language of the material',
),
    
array(
	'name' => 'MODS:Language_LanguageTerm_Authority',
	'description' => 'Language term authority',
),
    
array(
	'name' => 'MODS:Language_LanguageTerm_Type',
	'description' => 'Language term type (text or code)',
),
    
array(
	'name' => 'MODS:PhysicalDescription_DigitalOrigin',
	'description' => 'Reformatted digital',
),
    
array(
	'name' => 'MODS:Subject_Authority',
	'description' => 'Ex. LCSH',
),
    
array(
	'name' => 'MODS:Subject_Geographic_Authority',
	'description' => 'Geographic subject term authority',
),
    
array(
	'name' => 'MODS:Identifier',
	'description' => 'Put URL of item here.',
),
    
array(
	'name' => 'MODS:Identifier_Authority',
	'description' => 'local',
),
    
array(
	'name' => 'MODS:AccessCondition_Type',
	'description' => 'List type of access the rights statement concerns - i.e., use and reproduction',
),
    
array(
	'name' => 'MODS:RecordInfo_LanguageOfCataloging',
	'description' => 'Metadata language',
),
    
array(
	'name' => 'MODS:RecordInfo_RecordContentSource',
	'description' => 'Code for organization responsible for record creation',  
      )
);
