<?php
//Plugin modified for LIS462-20, Simmons SLIS West Digital Libraries class, Spring 2016. Forked from CUL LDPD profile MODS, adapted to flat representation in Omeka
$elements = array(    array(
	'name' => 'MODS:identifier',   
        'description' => 'Use filename (without extension or numeric id)',
),

array(
	'name' => 'MODS:titleInfo',   
        'description' => 'Title',
),

array(
	'name' => 'MODS:part_id',   
        'description' => 'Use filename (part set can be repeated)',
),

array(
	'name' => 'MODS:part_type',   
        'description' => 'Type of part (ex. page)',
),

array(
	'name' => 'MODS:part_order',   
        'description' => 'Part order (integer)',
),

array(
	'name' => 'MODS:name1',   
        'description' => 'Name',
),

array(
	'name' => 'MODS:name1_date',   
        'description' => 'Name Dates (Birth Year--Death Year)',
),

array(
	'name' => 'MODS:name1_role',   
        'description' => 'Role of named entity; use marc relator vocabulary',
),

array(
	'name' => 'MODS:name2',   
        'description' => 'Name',
),

array(
	'name' => 'MODS:name2_date',   
        'description' => 'Name Dates (Birth Year--Death Year)',
),

array(
	'name' => 'MODS:name2_role',   
        'description' => 'Role of named entity; use marc relator vocabulary',
),

array(
	'name' => 'MODS:name3',   
        'description' => 'Name',
),

array(
	'name' => 'MODS:name3_date',   
        'description' => 'Name Dates (Birth Year--Death Year)',
),

array(
	'name' => 'MODS:name3_role',   
        'description' => 'Role of named entity; use marc relator vocabulary',
),

array(
	'name' => 'MODS:typeofResource',   
        'description' => 'A term or terms that designate a category characterizing a particular style, form, or content, such as artistic, musical, literary composition, etc.',
),

array(
	'name' => 'MODS:genre',   
        'description' => 'Use AAT',
),

array(
	'name' => 'MODS:originInfo_Place',   
        'description' => 'Place resource was created',
),

array(
	'name' => 'MODS:originInfo_Place_Auth',   
        'description' => 'Use LCNAF or TGN',
),

array(
	'name' => 'MODS:originInfo_DateCreated',   
        'description' => 'Date orig resource created',
),

array(
	'name' => 'MODS:originInfo_DateCaptured',   
        'description' => 'Date digitized',
),

array(
	'name' => 'MODS:language',   
        'description' => 'Language of the material',
),

array(
	'name' => 'MODS:language_code',   
        'description' => 'language code',
),

array(
	'name' => 'MODS:physicalDescription_extent',   
        'description' => 'extent of original resource (pages, etc)',
),

array(
	'name' => 'MODS:physicalDescription_mediatype',   
        'description' => 'use internet media type list',
),

array(
	'name' => 'MODS:physicalDescription_digitalorigin',   
        'description' => 'Reformatted digital',
),

array(
	'name' => 'MODS:abstract',   
        'description' => 'Abstract',
),

array(
	'name' => 'MODS:subject_1',   
        'description' => 'Subject',
),

array(
	'name' => 'MODS:subj_auth_1',   
        'description' => 'Ex. LCSH',
),

array(
	'name' => 'MODS:subject_2',   
        'description' => 'Subject',
),

array(
	'name' => 'MODS:subj_auth_2',   
        'description' => 'Ex. LCSH',
),

array(
	'name' => 'MODS:subject_3',   
        'description' => 'Subject',
),

array(
	'name' => 'MODS:subj_auth_3',   
        'description' => 'Ex. LCSH',
),

array(
	'name' => 'MODS:subject_4',   
        'description' => 'Subject',
),

array(
	'name' => 'MODS:subj_auth_4',   
        'description' => 'Ex. LCSH',
),

array(
	'name' => 'MODS:accessCondition',   
        'description' => 'List type of access the rights statement concerns - i.e., use and reproduction',
),

array(
	'name' => 'MODS:recordInfo_LangOfCat',   
        'description' => 'Metadata language',
),

array(
	'name' => 'MODS:recordInfo_ContentSrc',   
        'description' => 'Code for organization responsible for record creation',     
          )
);
