<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{

  protected $fillable = ['companyimage','phone_number','address', 'open_hours','facebook','instagram','icddrb_content','president_content','youtube','tiktok','linkedin','daraj','email','missiontitle','missiondescription','whyus','image','title','description','popimage','gimage', 'directions',
'adi1','adi2', 'adi1link', 'adi2link', 'product_ids',
'title1','offer1','o1image','title2','offer2','o2image','title3','offer3','o3image','title4','offer4','o4image','title5','offer5','o5image', 'poplink','ad1', 'lvenues', 'lacc', 'rpricing', 'imap', 'coninfo', 'offadd', 'rrates', 'rguides', 'abguides','eone','etwo','ethree','efour',
'ad2','ad3', 'ad1link','ad2link','ad3link', 'customone', 'customtwo', 'customthree', 'customfour', 'abannerimage', 'teambannerimage', 'schedule_pdf','home_banner_title','home_banner_content','home_page_reg_content','footer_content','venue_image',
'archivebannerimage', 'contactbannerimage', 'mediacoveragebannerimage','mediacoveragebannerimage','aboutbannerimg', 'abstractguideline', 'eposterguideline', 'scientificagenda', 'sponsorbannerimage','mtitle','votinglink','sponsordescription','status','media' ,'statustwo','sponsor','box1title','box1para','box2title','box2para','boxtitle','italictitle' ,'boxcontent','missionitalictitle','lmission','lvalues','ohours','omap','imap','banpara','bantitle','banimage'
,'header_title','header_subtitle','about_ascodd_title','about_icddrb_title','about_oucru_subtitle','about_oucru_title','about_president_subtitle','about_president_title',
'committee_page_title','abstract_welcome_title','abstract_welcome_content','abstract_guideline_title','eposter_guideline_title','scientific_agenda_title'
,'venue_page_title','venue_accomodation_title','program_title','program_schedule_title','home_about_subtitle','home_about_title','home_oucru_subtitle','home_oucru_title'
,'home_history_title','home_partnership_title','home_funder_title','efive','d1_title','d2_title','d3_title','d1_pdf','d2_pdf','d3_pdf','twitter',



];

    use HasFactory;
}
