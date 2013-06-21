<?php

/*
  Template Name: Event Photos 
 */

get_header();

 
 $events = array (  array(  'name' => 'APUS 2013',  
                            'type' => 'Commencement', 
                            'date' => date("M d, Y", strtotime("2013-06-19")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.19-APUS-commencement-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.19-APUS-commencement.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/APUS-2013/30078414_RvtR6K',
                            'link_title' => 'DC Photobooth at APUS 2013 Commencement'
                        ),
                    array(  'name' => 'Brooke & TJ',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2013-06-15")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.15-brooke-tj-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.15-brooke-tj.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/06-15-13-Brooke/30033284_7NQ3Q',
                            'link_title' => 'DC Photobooth at Brooke & TJ\'s Wedding'
                        ),
                    array(  'name' => 'UMD Year End Celebration',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2013-06-14")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.14-UMD-End-of-year--201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.14-UMD-End-of-year-.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/06-14-13-University-of/30032363_qM2Pw9',
                            'link_title' => 'DC Photobooth at UMD\'s Year End Celebration'
                        ),
                    array(  'name' => 'Karen Garrett',  
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2013-06-08")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.8-karen-garretts-40th-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.8-karen-garretts-40th.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/06-08-13-Karen-Garretts-40th/29909018_P2m46J',
                            'link_title' => 'DC Photobooth at Karen Garrett\s Birthday Party'
                        ),
                    array(  'name' => 'Lake Braddock 2013',  
                            'type' => 'Prom', 
                            'date' => date("M d, Y", strtotime("2013-06-07")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.7-lake-braddock-prom-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.7-lake-braddock-prom.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/06-08-13-Lake-Braddock-Prom/29908090_3MhpDz',
                            'link_title' => 'DC Photobooth at Lake Braddock Prom 2013'
                        ),
                    array(  'name' => 'Lake Braddock 2013 Part 2',  
                            'type' => 'Prom', 
                            'date' => date("M d, Y", strtotime("2013-06-07")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.7-lake-braddock-prom-2-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.7-lake-braddock-prom-2.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/06-07-13-Lake-Braddock-Prom1/29908752_vXmwfH',
                            'link_title' => 'DC Photobooth at Lake Braddock Prom 2013'
                        ),
                    array(  'name' => 'Courtney & Josh',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2013-06-01")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.1.-Courtney-wilson-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/06/6.1.-Courtney-wilson.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Courtney-Wilson-Wedding/29791089_QRKn8b',
                            'link_title' => 'DC Photobooth at Courtney & Josh\'s Wedding'
                        ),
     
                    array(  'name' => 'Randy\'s Graduation',  
                            'type' => 'Graduation Party', 
                            'date' => date("M d, Y", strtotime("2013-05-18")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.18-Randys-Graduation-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.18-Randys-Graduation.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Randys-Graduation/29676156_sW9Zjv',
                            'link_title' => 'DC Photobooth at Randy\'s Graduation Party'
                        ),
                    array(  'name' => 'Susan & Tom',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2013-05-11")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.11-susan-tom-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.11-susan-tom.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Susan-and-Tom-5-11-13/29376332_wCXhcr',
                            'link_title' => 'DC Photobooth at Susan and Tom\'s Wedding'
                        ),
                    array(  'name' => 'Sarah & Marques',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2013-05-04")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.4-sarah-marques-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.4-sarah-marques.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Sarah-Wedding/29368628_W6ZH3F',
                            'link_title' => 'DC Photobooth at Sarah and Marques\' Wedding'
                        ),
                    array(  'name' => 'March of Dimes',  
                            'type' => 'Fundraiser', 
                            'date' => date("M d, Y", strtotime("2013-05-04")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.4-march-of-dimes-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/5.4-march-of-dimes.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/March-of-Dimes/29368468_pRhqZX',
                            'link_title' => 'DC Photobooth with the March of Dimes'
                        ),
                    array(  'name' => 'Zach\'s Bar Mitzvah',  
                            'type' => 'Bar Mitzvah', 
                            'date' => date("M d, Y", strtotime("2013-04-27")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4.27-zachs-mitz-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4.27-zachs-mitz.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Mitzvahs/Zachs-Bar-Mitzvah/29368537_9f5NQK',
                            'link_title' => 'DC Photobooth at Zach\'s Bar Mitzvah'
                        ),
                    array(  'name' => 'Westlake High School',  
                            'type' => 'Prom', 
                            'date' => date("M d, Y", strtotime("2013-04-20")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4.20-Westlake-Prom-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4.20-Westlake-Prom.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Prom/Westlake-Prom-2013/29368288_3dMqv7',
                            'link_title' => 'DC Photobooth at Westlake High School Prom'
                        ),
                    
                    array(  'name' => 'Erica & Paul',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2013-04-13")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-13-erica-paul-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-13-erica-paul.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/04-13-13EricaPaul/28928661_TcX5wN',
                            'link_title' => 'DC Photobooth at Erica and Paul\'s Wedding'
                        ),
                    array(  'name' => 'Save the Children',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2013-04-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-10-save-the-children-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-10-save-the-children.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/Save-the-Children/28854488_pXgwBK',
                            'link_title' => 'DC Photobooth at the Save the Children Event'
                        ),
                    array(  'name' => 'Capturing Love',  
                            'type' => 'Book Release Party', 
                            'date' => date("M d, Y", strtotime("2013-04-09")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-9-capturing-the-love-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/05/4-9-capturing-the-love.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/04-09-13-capturing-love/28840962_ZZRLwX',
                            'link_title' => 'DC Photobooth at Capturing the Love'
                        ),
                    array(  'name' => 'UMD Teacher Appreciation',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2013-03-22")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/04/umd-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/04/umd.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/3-22-2013-Teachers-at/28579832_pwnVTw',
                            'link_title' => 'DC Photobooth at UMD Teacher Appreciation Event'
                        ),
                    array(  'name' => 'Catapult Consultants',  
                            'type' => 'Corporate Event', 
                            'date' => date("M d, Y", strtotime("2013-02-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/2-23-catapult-consultants-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/2-23-catapult-consultants.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/Catapult-Consultants/28170227_jvgSXT',
                            'link_title' => 'DC Photobooth at Catapult Consultants Coroporate Event'
                        ),
                    array(  'name' => 'Terp Wellness Expo',  
                            'type' => 'Wellness Event', 
                            'date' => date("M d, Y", strtotime("2013-02-07")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/2.7.UMD_-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/2.7.UMD_.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/02-07-13-maryland-university/27906554_KFwX3H',
                            'link_title' => 'DC Photobooth at the UMD Terp Wellness Expo'
                        ),
                    array(  'name' => 'Fors Marsh Group',  
                            'type' => 'Company Party', 
                            'date' => date("M d, Y", strtotime("2013-02-01")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/fors-marsh-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/02/fors-marsh.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/02-01-2013-Fors-Marsh-Group/27864927_n53PjC',
                            'link_title' => 'DC Photobooth at the Fors Marsh Group Company Party'
                        ),
                    array(  'name' => 'CustomInk',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2013-01-26")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/customink-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/customink.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/1262013-CustomInk-Holiday/27766696_Jt53pF',
                            'link_title' => 'DC Photobooth at the CustomInk Holiday Party'
                        ),
                    array(  'name' => 'Westfields Golf Club',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2013-01-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/westfields-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/westfields.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/01-12-13-Westfields-Golf-Club/27552169_Vfj7Ls',
                            'link_title' => 'DC Photobooth at the Westfields Golf Club'
                        ),
                    array(  'name' => 'Waterford at Fair Oaks',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2013-01-06")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/waterford-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/waterford.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/01-06-13-Waterford-annual/27482443_dKTqQv',
                            'link_title' => 'DC Photobooth at the Waterford at Fair Oaks'
                        ),
                    array(  'name' => 'Kimberly & William',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-12-29")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/kimberlywilliam-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2013/01/kimberlywilliam.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/12-29-12-Kimberly-William/27552119_cKrMzP',
                            'link_title' => 'DC Photobooth at the Wedding of Kumberly & William'
                        ),
                    array(  'name' => 'Easterns Automotive Group',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-16")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/easterns-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/easterns.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/Easterns/27144886_TpLQCD',
                            'link_title' => 'DC Photobooth at the Reingold Holiday Party'
                        ),
                    array(  'name' => 'OutsourceIT',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-15")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/outsourceit-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/outsourceit.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/Outsourceit/27144837_vSGGNS',
                            'link_title' => 'DC Photobooth at the OutsourceIT Holiday Party'
                        ),
                    array(  'name' => 'Reingold',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-14")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/reingold-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/reingold.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-14-Reingold-Holiday-Party/27137682_d4RFgm',
                            'link_title' => 'DC Photobooth at the Reingold Holiday Party'
                        ),
                    array(  'name' => 'Sotheby\'s International Realty',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-13")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/sothebys-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/sothebys.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-13-12-Sothebys-holiday/27075897_83Rn52',
                            'link_title' => 'DC Photobooth at Sotheby\'s Holiday Party'
                        ),
                    array(  'name' => 'Baker Botts LLP',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/bakerbotts-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/bakerbotts.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-12-Baker-Botts/27172448_4kRqnt',
                            'link_title' => 'DC Photobooth at Baker Botts\' Holiday Party'
                        ),
                    array(  'name' => 'TNS Inc.',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-08")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/tns-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/tns.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-8-TNS-Holiday-Party/27028524_mjJNxp',
                            'link_title' => 'DC Photobooth at the TNS Holiday Party'
                        ),
                    array(  'name' => 'OPOWER',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-07")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/opower-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/opower.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-07-12-opower-holiday-party/26963359_z83WnV',
                            'link_title' => 'DC Photobooth at OPOWER\'s Holiday Party'
                        ),
                    array(  'name' => 'triCerat Inc.',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-06")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/tricerat-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/tricerat.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-06-12-tricerat-inc-hoiday/26963322_P5RnWB',
                            'link_title' => 'DC Photobooth at triCerat\'s Holiday Party'
                        ),
                    array(  'name' => 'Alexander Christmas Party',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-01")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/12-1-alexander-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/12-1-alexander.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Holiday-Party/Alexander-Family-Party/26872663_dh7nmk',
                            'link_title' => 'DC Photobooth at Washington Redskin\'s Lorenzo Alexander\'s Holiday Party'
                        ),
                    array(  'name' => 'eTrade',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-12-01")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/12-1-etrade-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/12-1-etrade.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/12-01-12-etrade-holiday-party/26840320_45pRM8',
                            'link_title' => 'DC Photobooth at eTrade\'s Holiday Party'
                        ),
                    array(  'name' => 'Digitek',  
                            'type' => 'Holiday Party', 
                            'date' => date("M d, Y", strtotime("2012-11-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/11-20-digitek-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/12/11-20-digitek.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Holidays/11-30-digitek-holiday-party/26823555_LZSkhH',
                            'link_title' => 'DC Photobooth at Digitek\'s Holiday Party'
                        ),
                    array(  'name' => 'Washington & Lee Class of 2002',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-11-24")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/washingtonlee-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/washingtonlee.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Washington-Lee-10-Year-Reunion/26730134_gG5Mkn',
                            'link_title' => 'DC Photobooth at Washington & Lee\'s Class of 2002 reunion'
                        ),
                    array(  'name' => 'Susan & David',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-11-17")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/11.17-susandavid-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/11.17-susandavid.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Susan-Wedding-11-17/26729956_t5hJ9v',
                            'link_title' => 'DC Photobooth at Susan and David\'s Wedding'
                        ),
                    array(  'name' => 'Zeta Tau Alpha Fall Formal',  
                            'type' => 'Formal', 
                            'date' => date("M d, Y", strtotime("2012-11-16")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/zeta-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/zeta-susandavid.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Zeta-UMD-Event/26729765_Shsbmn',
                            'link_title' => 'DC Photobooth at Zeta Tau Alpha Fall Formal'
                        ),
                    array(  'name' => 'Bethesda Magazine 50th Issue',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-11-13")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/bethesdaMagazine-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/bethesdaMagazine.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Bethesda-Magazine-50th-issue/26512781_r4tCKQ',
                            'link_title' => 'DC Photobooth at Bethesda Magazine\'s 50th Issue Celebration'
                        ),
                    array(  'name' => 'Foundation for Jewish Camp',  
                            'type' => 'Convention', 
                            'date' => 'Nov 10-11, 2012', 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/jewishFoundation-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/jewishFoundation.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Social-Click-Jewish-Foundation/26512843_J5VHcF',
                            'link_title' => 'DC Photobooth with the Social Click and the Foundation for Jewish Camp'
                        ),
                    array(  'name' => 'Innas & Hazem',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-11-11")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/innashazem-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/innashazem.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Innas/26489200_sbfXxC',
                            'link_title' => 'DC Photobooth at Innas & Hazem\'s Wedding'
                        ),
                    array(  'name' => 'Elizabeth & Charles',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-11-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/charleselizabeth-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/charleselizabeth.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Elizabeth-and-Charles-Wedding/26489008_2m8M9Z',
                            'link_title' => 'DC Photobooth at Charles & Elizabeth\'s Wedding'
                        ),
                    array(  'name' => 'Sam\'s Bar Mitzvah',  
                            'type' => 'Bar Mitzvah', 
                            'date' => date("M d, Y", strtotime("2012-11-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/samMitzvah-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/samMitzvah.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Mitzvahs/Sam-Mitzvah/26488846_h893RH',
                            'link_title' => 'DC Photobooth at Sam\'s Bar Mitzvah'
                        ),
                    array(  'name' => 'Brooksfield\'s 25th',  
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-11-02")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/brooksfield-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/brooksfield.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/School/Brooksfield-25th/26488767_F62cPq',
                            'link_title' => 'DC Photobooth at Brooksfield\'s 25th Anniversary'
                        ),
                    array(  'name' => 'Leire & John',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-11-03")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/leirejohn-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/11/leirejohn.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/11-03-Leire/26342276_DmXJQw',
                            'link_title' => 'DC Photobooth at Leire & John\'s Wedding'
                        ),
                    array(  'name' => 'Damien & Yen',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-10-27")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/daminyen-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/daminyen.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Yen-and-Damien/26253763_Kp6z6L',
                            'link_title' => 'DC Photobooth at Damien & Yen\'s Wedding'
                        ),
                    array(  'name' => 'Natalie & Brian',  
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-10-20")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/nataliebrian-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/nataliebrian.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/10-20-Natalie-Brian/26072591_7MS3tv',
                            'link_title' => 'DC Photobooth at Natalie & Brian\'s Wedding'
                        ),
                    array(  'name' => 'Kingstowne',  
                            'type' => 'Volunteer Event', 
                            'date' => date("M d, Y", strtotime("2012-10-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/kingstowne-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/kingstowne.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/Kingstowne/25996311_t6dF4x',
                            'link_title' => 'DC Photobooth at Kingstowne\'s Volunteer Event'
                        ),
                    array(  'name' => 'Legal Services of Northern Virginia', 
                            'type' => 'Non-Profit Event', 
                            'date' => date("M d, Y", strtotime("2012-10-13")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/lsnv-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/lsnv.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Other/Legal-Services-of-N-VA-10-13/26005024_Sk8Zv9',
                            'link_title' => 'DC Photobooth at Kingstowne\'s Volunteer Event'
                        ),
                    array(  'name' => 'Jamie and AJ', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-10-05")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/i-dPbMpLr-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/i-dPbMpLr.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/jamie-aj-wedding/25766526_qfptG7',
                            'link_title' => 'DC Photobooth at Jamie and AJ\'s Wedding'
                        ),
                    array(  'name' => 'Sara and Robert', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-09-29")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/sara-robert-bash-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/10/sara-robert-bash.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Sara-and-Robert-Bash/25658878_K42WBb',
                            'link_title' => 'DC Photobooth at Sara and Robert\'s Bash'
                        ),
                    array(  'name' => 'Sarah and Bill', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-09-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/sarahandbill-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/sarahandbill.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/9-23-Sarah-and-Bill/25547498_ZHJRVC',
                            'link_title' => 'DC Photobooth at Sarah and Bill\'s Wedding'
                        ),
                    array(  'name' => 'Re/Max Allegiance', 
                            'type' => 'Corporate Event', 
                            'date' => date("M d, Y", strtotime("2012-09-18")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/remax-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/remax.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/9-18-Remax/25547487_tqrjhX',
                            'link_title' => 'DC Photobooth at Re/Max Allegiance Convention'
                        ),
                    array(  'name' => 'Lighthouse Wealth Management', 
                            'type' => 'Corporate Event', 
                            'date' => date("M d, Y", strtotime("2012-09-15")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/lighthouse-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/lighthouse.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Corporate-Event/Lighthouse-Wealth-Management/25390318_ZTWXxX',
                            'link_title' => 'DC Photobooth and Lighthouse Wealth Management'
                        ),
                    array(  'name' => 'Caroline and Emily', 
                            'type' => 'Bat Mitzvah', 
                            'date' => date("M d, Y", strtotime("2012-09-15")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/caroline-emily-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/caroline-emily.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Mitzvahs/caroline-and-emily-bat-mitzvah/25388279_s87ksP',
                            'link_title' => 'DC Photobooth at Caroline and Emily\'s Bat Mitzvah'
                        ),
                    array(  'name' => 'The Wedding Salon', 
                            'type' => 'Bridal Show', 
                            'date' => date("M d, Y", strtotime("2012-09-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/wedding-slaon-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/wedding-slaon.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/The-Wedding-Salon/25305705_fjvgXN',
                            'link_title' => 'DC Photobooth at the Wedding Salon Bridal Show'
                        ),
                    array(  'name' => 'Sherif and Karmel', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-09-09")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/i-TMM65XH-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/i-TMM65XH.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Sharif-Karmel-Wedding/25305727_dKjXG8',
                            'link_title' => 'DC Photobooth at Sherif and Karmel\'s Wedding'
                        ),
                    array(  'name' => 'Kikola and McBee', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-09-02")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101040731-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101040731.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/McBee-wedding/25160543_ccRKb2',
                            'link_title' => 'DC Photobooth at Kikola and McBee\'s Wedding'
                        ),
                    array(  'name' => 'Jena and Jeffrey', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-09-01")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101024545-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101024545.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Jena/25150657_CQdjPH',
                            'link_title' => 'DC Photobooth at Jena and Jeffrey\'s Wedding'
                        ),
                    array(  'name' => 'GW Bound!', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-08-24")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-NnHQQRm-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-NnHQQRm.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/University/GW-Bound/25074466_xwqNnK',
                            'link_title' => 'DC Photobooth at GW Bound'
                        ),
                    array(  'name' => 'Gordon and Jackie', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-07-28")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_020742-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_020742.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Jackie-and-Gordon/24455822_tnh39f',
                            'link_title' => 'DC Photobooth at Jackie and Gordon\'s Wedding'
                        ),
                    array(  'name' => 'Jamie and Chris', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-07-27")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-4xwv53F-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-4xwv53F.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/7-27-Jamie-and-Chris/24603842_fWxwhD',
                            'link_title' => 'DC Photobooth at Jamie and Chris\' Wedding'
                        ),
                    array(  'name' => 'WeddingWire World', 
                            'type' => 'Conference', 
                            'date' => date("M d, Y", strtotime("2012-07-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/WeddingWire-World-2012/24355389_x58ckQ',
                            'link_title' => 'DC Photobooth at WeddingWire World'
                        ),
                    array(  'name' => 'Ashley and Darryl', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-07-22")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101015241-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/ashley-and-darryl/24322608_THPD82',
                            'link_title' => 'DC Photobooth at Ashley and Darryl\'s Wedding'
                        ),
                    array(  'name' => 'Dorothy\'s Birthday Party', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/6-30-Dorothys-Birthday/23913877_LtdN5X',
                            'link_title' => 'DC Photobooth at Dorothy\'s Birthday Party'
                        ),
                    array(  'name' => 'Jenna\'s Graduation Party', 
                            'type' => 'Graduation Party', 
                            'date' => date("M d, Y", strtotime("2012-06-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_021302-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_021302.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/6-30-Jennas-Graduation-Party/23913837_qbwqfX',
                            'link_title' => 'DC Photobooth at Jenna\'s Graduation Party'
                        ),
                    array(  'name' => 'Steve\'s 70th Part 2', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101030716-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101030716.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Birthday/steves-70th-bday-623/23748189_RzStmC',
                            'link_title' => 'DC Photobooth at Steve\'s 70th Birthday Party (part 2)'
                        ),
                    array(  'name' => 'Antoine Bethea\'s Safe Coverage', 
                            'type' => 'Fundraiser', 
                            'date' => date("M d, Y", strtotime("2012-06-21")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101022821-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101022821.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/Antoine-Bethea-Safe-Coverage/23725441_DZmTVL',
                            'link_title' => 'DC Photobooth at Antoine Bethea\'s Safe Coverage Fundraiser'
                        ),
                    array(  'name' => 'Steve\'s 70th', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-16")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101004856-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101004856.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Birthday/Steves-70th-Birthday/23618578_bD3TXN',
                            'link_title' => 'DC Photobooth at Steve\'s 70th Birthday Party'
                        ),
                    array(  'name' => 'Thomas & Yong', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-06-09")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101003910-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101003910.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Tommy-and-Yong-Wedding/23568163_38QJkh',
                            'link_title' => 'DC Photobooth at the Wedding of Thomas and Yong'
                        ),
                    array(  'name' => 'NBC 4', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-06-08")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101002941-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101002941.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/NBC-Universal/23567985_k8jLz9',
                            'link_title' => 'DC Photobooth at NBC 4 Party'
                        ),
                    array(  'name' => 'Ashley & Zoe', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-06-02")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/i-3tFZk67-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/i-3tFZk67.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/6-2-Ashley-and-Zoe-Wedding/23355382_nznb84',
                            'link_title' => 'DC Photobooth at the Wedding of Ashley and Zoe'
                        ),
                    array(  'name' => 'Sam & Emma Goldstein', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-05-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/5-12-Goldstein-Wedding/23120174_wtKgfK',
                            'link_title' => 'DC Photobooth at the Wedding of Sam and Emma Goldstein'
                        ),
                    array(  'name' => 'University of Maryland', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-05-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-zXW466b-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-zXW466b.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-12-UMD/23120692_CqK2HT',
                            'link_title' => 'DC Photobooth at the University of Maryland End of Year Celebration'
                        ),
                    array(  'name' => 'Mark Twain Middle School Dance', 
                            'type' => 'Dance', 
                            'date' => date("M d, Y", strtotime("2012-05-11")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Dance/5-11-Mark-Twain-Middle-School/22931160_HCfrtw',
                            'link_title' => 'DC Photobooth at Mark Twain Middle School 8th Grade Dance'
                        ),
                    array(  'name' => 'Howard University Graduation Celebration', 
                            'type' => 'Graduation Party', 
                            'date' => date("M d, Y", strtotime("2012-05-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/Howard-University-Graduation/22931303_txqdJs',
                            'link_title' => 'DC Photobooth at Howard University School of Pharmacy Celebration'
                        ),
                    array(  'name' => 'Dorman\'s Bat Mitzvah', 
                            'type' => 'Bat Mitzvah', 
                            'date' => date("M d, Y", strtotime("2012-05-06")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_003205-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_003205.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-6-Hannah-Dorman-Bat-Mitzvah/22857874_8HxchX',
                            'link_title' => 'DC Photobooth at Hannah Dorman\'s Bat Mitzvah'
                        ),
                    array(  'name' => 'West Lake HS Prom', 
                            'type' => 'Prom', 
                            'date' => date("M d, Y", strtotime("2012-05-05")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-5-West-Lake-HS-Prom/22857852_MZfW76',
                            'link_title' => 'DC Photobooth at the West Lake High School Prom'
                        ),
                    array(  'name' => 'WeddingWire Recruitment Event', 
                            'type' => 'Recruitment', 
                            'date' => date("M d, Y", strtotime("2012-04-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Professional/4-30-WeddingWire-Recruiting/22763467_3Sj6Z7',
                            'link_title' => 'DC Photobooth at the a WeddingWire Recruitment Event at the Majestic'
                        ),
                    array(  'name' => 'Colleen & Ryan Hill', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-04-28")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_015647-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_015647.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/4-28-Colleen-and-Ryan-Wedding/22763435_WhXcmT#!i=1825945173&k=3LZqr3h',
                            'link_title' => 'DC Photobooth at the Wedding of Colleen and Ryan Hill'
                        ),
                    array(  'name' => 'NBAC Countdown to the Olympics', 
                            'type' => 'Fundraiser', 
                            'date' => date("M d, Y", strtotime("2012-04-14")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/North-Baltimore-Aquatic-Club/22451267_Tst2Th',
                            'link_title' => 'DC Photobooth at the NBAC Countdown to the Olympics Fundraiser'
                        ),
                    array(  'name' => 'Tai & Becci Truong', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-03-24")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_052956-1764629163-O-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_052956-1764629163-O.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/3-24-Truong-Wedding/22108372_DKwP2T',
                            'link_title' => 'DC Photobooth at the Wedding of Tai and Becci Truong'
                        ),
                    array(  'name' => 'Baltimore Sheraton North Hotel', 
                            'type' => 'Bridal Show', 
                            'date' => date("M d, Y", strtotime("2012-02-19")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/DC-Photobooth/21522481_Hc6Zp9/',
                            'link_title' => 'DC Photobooth at the Baltimore Sheraton North Bridal Show'
                        )
//     ,
//                    array(  'name' => 'DC Photobooth Launch Party', 
//                            'type' => 'Party', 
//                            'date' => date("M d, Y", strtotime("2012-01-26")), 
//                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_000347-201x300.jpg',
//                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_000347.jpg',
//                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/DC-Photobooth-Launch-Party/22144760_cZ9Nqj',
//                            'link_title' => 'DC Photobooth Launch Party'
//                        )
            );
 
 $sample_img_width = 160;
 $sample_img_height = 240;

?>

<div id="primaryContent">
    <div class="post">
        <h1 class="postTitle page">event photos</h1>
        <div style="clear:both"></div>
        
        <div class="event-items-container floatLeft" style="width:967px;" >
            <div class="event-photo-instructions" style="width: 480px; margin-bottom: 10px;">
                Click on your event and use your password to view your photos
            </div>
        
            <?php foreach ( $events as $key=>$event ) { ?>

                <div class="event-item floatLeft<?php if(($key+1)%5==0){ ?> far-right<?php } ?>">
                    <a href="<?php echo $event['host_url'] ?>" target="blank" title="<?php echo $event['link_title'] ?>">
                        <img src="<?php echo $event['featured_image'] ?>" alt="DC Photobooth Event Photos" title="DC Photobooth Event Photos" width="<?php echo $sample_img_width ?>" height="<?php echo $sample_img_height ?>" class="pageimg" />                
                        <div class="event-item-name"><?php echo $event['name'] ?></div>
                    </a>
                    <div class="event-item-date"><?php echo $event['date'] ?></div>
                    <div class="event-item-type"><?php echo $event['type'] ?></div>
                </div>
            <?php } ?>
        </div>
        
        
        <div id="temp-image-filler" style="float:right; display: none;">
            <?php foreach ( $events as $key=>$event ) { ?>
                <div>
                    <img src="<?php echo $event['featured_image_large'] ?>" width="375" height="562" class="postimg" alt="<?php echo $event['link_title'] ?>">
                    <div class="event-item-name" style="width:385px; margin-top: 10px;"><?php echo $event['name'] ?></div>
                    <span class="event-item-date" style="width:385px;"><?php echo $event['date'] ?></span>
                    <span class="event-item-type" style="width:385px;"><?php echo $event['type'] ?></span>
                </div>
            <?php } ?>
        </div>
        
        
        
        <div style="clear:both"></div>
    </div>
</div>



<?php
get_footer();
?>