<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use App\Models\Product;
use Illuminate\Http\Request;

class AppearanceController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Appearance::all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
{
    $products = Product::all();
    return view('backend.about.create', compact('products'));
}

public function aboutedit($id)
{
    $about = Appearance::findOrFail($id);
    $products = Product::all();
    return view('backend.about.edit', compact('about', 'products'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('companyimage');
        $file = new Appearance();
        $imageName = 'product' . time() . ('.' . $image->getClientOriginalExtension());
        $image->move(public_path('images/product'), $imageName);
        $file->create([
            'companyimage' => $imageName,
            'companytitle' => $request['companytitle'],
                'product_ids' => json_encode($request->product_ids),

            'phone_number' => $request['phone_number'],
            'address' => $request['address'],
            'companydescription' => $request['companydescription'],
            'missiontitle' => $request['missiontitle'],
            'missiondescription' => $request['missiondescription'],
            'termsdescription' => $request['termsdescription'],
            'shippingdescription' => $request['shippingdescription'],
            'supportcenterdescription' => $request['supportcenterdescription'],
            'productreturndescription' => $request['productreturndescription'],
            'moneybackguaranteedescription' => $request['moneybackguaranteedescription'],
            'paymentmethoddescription' => $request['paymentmethoddescription'],
          

        ]);

         return redirect()->route('aboutus.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
 

    public function aboutedittwo($id)
    {   
        $about = Appearance::find($id);
         return view('backend.about.edittwo',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function aboutupdate(Request $request, $id)
    {
                     $imagethree = $request->file('gimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['gimage'];
        if($imagethree){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameThree = 'productthree' . time() . ('.' . $imagethree->getClientOriginalExtension());
        $imagethree->move(public_path('images/product'), $imageNameThree);
        }else{
            $imageNameThree = $file['gimage'];

        }
        
                     $imagelast = $request->file('banimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['banimage'];
        if($imagelast){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameLast = 'productthree' . time() . ('.' . $imagelast->getClientOriginalExtension());
        $imagelast->move(public_path('images/product'), $imageNameLast);
        }else{
            $imageNameLast = $file['banimage'];

        }
        
           $image = $request->file('companyimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['companyimage'];
        if($image){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageName = 'product' . time() . ('.' . $image->getClientOriginalExtension());
        $image->move(public_path('images/product'), $imageName);
        }else{
            $imageName = $file['companyimage'];

        }
        
               $imagetwo = $request->file('popimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['popimage'];
        if($imagetwo){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameTwo = 'producttwo' . time() . ('.' . $imagetwo->getClientOriginalExtension());
        $imagetwo->move(public_path('images/product'), $imageNameTwo);
        }else{
            $imageNameTwo = $file['popimage'];

        }


        $status = $request->input('media') ? 1 : 0;
        $statustwo = $request->input('sponsor') ? 1 : 0;
        $file = Appearance::find($id);


      
       
       
        $file->update([
            
             'box1title' => $request['box1title'],
              'box1para' => $request['box1para'],
               'box2title' => $request['box2title'],
                'box2para' => $request['box2para'],
                
'product_ids' => $request->product_ids_final,
                
                 'boxtitle' => $request['boxtitle'],
                  'italictitle' => $request['italictitle'],
                  'boxcontent' => $request['boxcontent'],
                   'missionitalictitle' => $request['missionitalictitle'],
                    'lmission' => $request['lmission'], 
                    'icddrb_content' => $request['icddrb_content'], 
                    'president_content' => $request['president_content'],
                    'aboutbannerimg' => $request['aboutbannerimg'],
                                        'adi1' => $request['adi1'],
                    'adi2' => $request['adi2'],

                    'abstractguideline' => $request['abstractguideline'],
                    'eposterguideline' => $request['eposterguideline'],
                    'scientificagenda' => $request['scientificagenda'],
                    'schedule_pdf' => $request['schedule_pdf'],
                    
                                   
                    'd3_pdf' => $request['d3_pdf'],
                              



                    
                    'home_banner_title' => $request['home_banner_title'],
                    'home_banner_content' => $request['home_banner_content'],
                    'home_page_reg_content' => $request['home_page_reg_content'],
                    'footer_content' => $request['footer_content'],
                     'lvalues' => $request['lvalues'],
                                          'lvenues' => $request['lvenues'],
                                          'lacc' => $request['lacc'],
                                          'rpricing' => $request['rpricing'],
                                          'directions' => $request['directions'],
                                                                                    'imap' => $request['imap'],
                                                                                    'coninfo' => $request['coninfo'],
                                                                                    'offadd' => $request['offadd'],
                                                                                    
                                                                                         'rrates' => $request['rrates'],
                                                                                    'rguides' => $request['rguides'],
                                                                                    'abguides' => $request['abguides'],
                                                                                    
                                                                                                                                                                        'abguides' => $request['abguides'],


                                          

                      'ohours' => $request['ohours'],
                       'omap' => $request['omap'],
                                              'imap' => $request['imap'],

                        'bantitle' => $request['bantitle'],
                         'banpara' => $request['banpara'],
 
     'gimage' => $imageNameThree,
     'companyimage' => $imageName,
                 'popimage' => $imageNameTwo,
                 'banimage' => $imageNameLast,

     

            'companytitle' => $request['companytitle'],
              'phone_number' => $request['phone_number'],
              
               'ad1link' => $request['ad1link'],
                'ad2link' => $request['ad2link'],
                 'ad3link' => $request['ad3link'],
              
              'email' => $request['email'],
            'status' => $request['status'],
            'statustwo' => $request['statustwo'],
               'open_hours' => $request['open_hours'],
                'facebook' => $request['facebook'],
                 'instagram' => $request['instagram'],
                 
                                  'twitter' => $request['twitter'],

                  'youtube' => $request['youtube'],
                  'linkedin' => $request['linkedin'],
                   'tiktok' => $request['tiktok'],
                    'daraj' => $request['daraj'],
            'address' => $request['address'],
            'companydescription' => $request['companydescription'],
            'missiontitle' => $request['missiontitle'],
            'missiondescription' => $request['missiondescription'],
            'termsdescription' => $request['termsdescription'],
            'shippingdescription' => $request['shippingdescription'],
            'supportcenterdescription' => $request['supportcenterdescription'],
            'productreturndescription' => $request['productreturndescription'],
            'moneybackguaranteedescription' => $request['moneybackguaranteedescription'],
            'paymentmethoddescription' => $request['paymentmethoddescription'],
            'whyus' => $request['whyus'],
            'title' => $request['title'],
            'description' => $request['description'],
            
            'poplink' => $request['poplink'],
            'venue_image' => $request['venue_image'],
            
            'mtitle' => $request['mtitle'],
            'sponsordescription' => $request['sponsordescription'],

            
            
            'votinglink' => $request['votinglink'],
           
            
            'customone' => $request['customone'],
            'customtwo' => $request['customtwo'], 
            'customthree' => $request['customthree'],
            'customfour' => $request['customfour'],
            

            'title1' => $request['title1'],
            'offer1' => $request['offer1'],



            'title2' => $request['title2'],
            'offer2' => $request['offer2'],
          

            'title3' => $request['title3'],
            'offer3' => $request['offer3'],
       

            'title4' => $request['title4'],
            'offer4' => $request['offer4'],
           

            'title5' => $request['title5'],
            'offer5' => $request['offer5'],
            'header_title' => $request['header_title'],
            'header_subtitle' => $request['header_subtitle'],
            'about_ascodd_title' => $request['about_ascodd_title'],
            'about_icddrb_title' => $request['about_icddrb_title'],
            'about_oucru_subtitle' => $request['about_oucru_subtitle'],
            'about_oucru_title' => $request['about_oucru_title'],
            'about_president_subtitle' => $request['about_president_subtitle'],
            'about_president_title' => $request['about_president_title'],
        
            'committee_page_title' => $request['committee_page_title'],
            'committee_page_subtitle' => $request['committee_page_subtitle'],
            'committee_page_content' => $request['committee_page_content'],
            'abstract_welcome_title' => $request['abstract_welcome_title'],
            'abstract_welcome_content' => $request['abstract_welcome_content'],
         
            'abstract_guideline_title' => $request['abstract_guideline_title'],
            'eposter_guideline_title' => $request['eposter_guideline_title'],
            'scientific_agenda_title' => $request['scientific_agenda_title'],
            'venue_page_title' => $request['venue_page_title'],
            'venue_accomodation_title' => $request['venue_accomodation_title'],
            'venue_accomodation_subtitle' => $request['venue_accomodation_subtitle'],
            'program_title' => $request['program_title'],
            'program_schedule_title' => $request['program_schedule_title'],
            
                        'd1_title' => $request['d1_title'],
                                                'd2_title' => $request['d2_title'],
                        'd3_title' => $request['d3_title'],


            
            'home_about_subtitle' => $request['home_about_subtitle'],
            'home_about_title' => $request['home_about_title'],
            'home_oucru_subtitle' => $request['home_oucru_subtitle'],
            'home_oucru_title' => $request['home_oucru_title'],
          'home_history_title' => $request['home_history_title'],
          'home_partnership_title' => $request['home_partnership_title'],
          'home_funder_title' => $request['home_funder_title'],

        ]);

         return back();
    }
    
        public function aboutupdatetwo(Request $request, $id)
    {
       
        $file = Appearance::find($id);


      
       
       
        $file->update([
            

                                                                                    
                                                                                                                                                                        'abguides' => $request['abguides'],
                                                                                    'eone' => $request['eone'],

                                                                                    'etwo' => $request['etwo'],
                                                                                    'ethree' => $request['ethree'],
                                                                                    'efour' => $request['efour'],
                                                                                                                                                                        'efive' => $request['efive'],


                                          

                   
         

        
          

        ]);

         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
