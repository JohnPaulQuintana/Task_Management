<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white h3">
                    
                </h3>
                <button type="button" id="close-crud" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="POST" action="{{ route('store') }}">
                {{-- id --}}
                <input type="number" class="input hidden" name="task_id" id="task-id" value="">
                @csrf
                <div class="flex justify-between">
                    {{-- to save --}}
                    <div class="grid gap-4 mb-4 p-2 grid-cols-2 max-h-80">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="task_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Number</label>
                            <input type="text" name="task_number" id="task_number" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task title" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="task_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Title</label>
                            <input type="text" name="title" id="task_title" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task title" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Category</label>
                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                        {{-- <div class="col-span-2 sm:col-span-1">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select status</option>
                                <option value="ready">Ready</option>
                                <option value="ongoing">On-going</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div> --}}
                        <div class="col-span-2">
                            
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Description</label>
                            <textarea id="description" name="description" rows="4" class="input block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
    
                        </div>
                        
                        <input type="submit" value="save task" class="w-full bg-blue-500 rounded-md text-white p-1 hover:bg-blue-700">
                        
                    </div>
    
                    {{-- pdf --}}
                    <div class="max-h-screen shadow-md overflow-scroll p-4">
                        <!-- page 1 -->
                        <div class="wrapper md:max-w-full">
                            <div class="header">
    
                                <div class="left">
                                    <div class="company-name">
                                        <span id="f-title">Isla</span>
                                        <span id="s-title">Sol</span>
                                    </div>
                                    <span id="b-text">Renewable Energy from ACEN</span>
                                </div>
    
                                <div class="right">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>SECTION</th>
                                                <th>TITLE</th>
                                                <th>DOCUMENT NUMBER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td class="p-0"><input type="text" name="s1_section" id="" value="{{ $section1[0]->s1_section }}" class="border-1 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                            <td class="p-0"><input type="text" name="s1_title" id="" value="{{ $section1[0]->s1_title }}" class="border-0 focus:ring-0 whitespace-pre-wrap" style="width: 100%; height: 40px;" readonly></td>
                                            <td class="p-0"><input type="text" name="s1_document_number" id="" value="{{ $section1[0]->s1_document_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                        </tbody>
                                    </table>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>EFFECTIVE DATE</th>
                                                <th>REVISION NUMBER</th>
                                                <th>PAGE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="s1_effective_date" id="" value="{{ $section1[0]->s1_effective_date }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                                <td><input type="text" name="s1_revision_number" id="" value="{{ $section1[0]->s1_revision_number }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                                <td><input type="text" name="s1_page" id="" value="{{ $section1[0]->s1_page }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                            <section>
                                <div class="section-content">
                                    <span class="span-title-1">TITLE</span>
                                    <span><input type="text" name="s2_title" id="" value="{{ $section2[0]->s2_title }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">DOCUMENT NUMBER</span>
                                    <span><input type="text" name="s2_document_number" id="" value="{{ $section2[0]->s2_document_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">DEPARTMENT</span>
                                    <span><input type="text" name="s2_department" id="" value="{{ $section2[0]->s2_department }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">PREPARED BY</span>
                                    <span><input type="text" name="s2_prepared_by" id="" value="{{ $section2[0]->s2_prepared_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">REVIEWED BY</span>
                                    <span><input type="text" name="s2_reviewed_by" id="" value="{{ $section2[0]->s2_reviewed_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">APPROVED BY</span>
                                    <span><input type="text" name="s2_approved_by" id="" value="{{ $section2[0]->s2_approved_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                            </section>
    
                            <section>
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="4" id="section-head">DOCUMENT REVISION HISTORY</th>
                                            
                                        </tr>
                                        <tr>
                                            <th class="section-th">PAGE NO.</th>
                                            <th class="section-th">REVISION NO.</th>
                                            <th class="section-th section-th-b">CHANGE DESCRIPTION</th>
                                            <th class="section-th">EFFECTIVITY DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td>{{ $section3[0]->s3_page_no }}</td>
                                            <td>{{ $section3[0]->s3_revision_no }}</td>
                                            <td><textarea readonly class="border-0" name="s3_change_description_0" id="" cols="50" rows="1" readonly>{{ $section3[0]->s3_change_description }}</textarea></td>
                                            <td><input readonly type="text" name="s3_effective_date" id="" value="{{ $section3[0]->s3_effective_date }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td>{{ $section3[1]->s3_page_no }}</td>
                                            <td>{{ $section3[1]->s3_revision_no }}</td>
                                            <td>
                                                <label for="">Revision of the following:</label>
                                                <textarea readonly class="border-0 text-wrap" name="s3_change_description" id="" cols="50" rows="5" readonly>{{ $section3[1]->s3_change_description }}</textarea>
                                            </td>
                                            <td><input readonly type="text" name="s3_effective_date" id="" value="{{ $section3[1]->s3_effective_date }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                        </tr>
                                        <tr class="bg-white border-1 border-black dark:bg-gray-800 dark:border-gray-700">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
    
                            
                        </div>
    
                        <!-- page 2 -->
                        <div class="wrapper md:max-w-full">
                            <div class="header">
    
                                <div class="left">
                                    <div class="company-name">
                                        <span id="f-title">Isla</span>
                                        <span id="s-title">Sol</span>
                                    </div>
                                    <span id="b-text">Renewable Energy from ACEN</span>
                                </div>
    
                                <div class="right">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Section</th>
                                                <th>Title</th>
                                                <th>Document Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td class="p-0"><input type="text" name="s4_section" id="" value="{{ $section4[0]->s4_section }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                            <td class="p-0"><input type="text" name="s4_title" id="" value="{{ $section4[0]->s4_title }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                            <td class="p-0"><input type="text" name="s4_document_number" id="" value="{{ $section4[0]->s4_document_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></td>
                                        </tbody>
                                    </table>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Effective Date</th>
                                                <th>Revision number</th>
                                                <th>Page</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-0"><input type="text" name="s4_effective_date" id="" value="{{ $section4[0]->s4_effective_date }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                                <td><input type="text" name="s4_revision_number" id="" value="{{ $section4[0]->s4_revision_number }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                                <td><input type="text" name="s4_page" id="" value="{{ $section4[0]->s4_page }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                            <section>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">EQUIPMENT:</span>
                                    <span><input type="text" name="s5_equipment" id="" value="{{ $section5[0]->s5_equipment }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">SITE LOCATION:</span>
                                    <span><input type="text" name="s5_site_location" id="" value="{{ $section5[0]->s5_site_location }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">WORK ORDER #:</span>
                                    <span><input type="text" name="s5_work_order" id="" value="{{ $section5[0]->s5_work_order }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">DATE/S PERFORMED:</span>
                                    <span><input type="text" name="s5_date_performed" id="" value="{{ $section5[0]->s5_date_performed }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" readonly></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">INSTRUCTION:</span>
                                    <span>
                                        <textarea class="border-0 text-left w-full" name="s5_instruction" id="" cols="50" rows="3" readonly>{{ $section5[0]->s5_instruction }}</textarea>
                                    </span>
                                </div>
                                
                            </section>
    
                            <section>
                                <table border="1" id="section-2-t">
                                    <thead>
                                        <tr>
                                            <th class="section-th section-2-h" style="width: 20%;">Location</th>
                                            <th class="section-th section-2-h" style="width: 20%;">Clean workstation, tables, chairs, toilets, floors</th>
                                            <th class="section-th section-th-b section-2-h" style="width: 20%;">Clean exterior surrounding of building including landscape</th>
                                            <th class="section-th section-2-h">Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr><th class="text-right2">Control Room</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        
                                        <tr>
                                            <th class="text-right2">Conference Room</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right2">Pantry Room</t>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right2">Admin Office</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr><th class="text-right2">Manager's Office</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr><th class="text-right2">Comfort Room</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr><th class="text-right2">Storage Room</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        <tr><th class="text-right2">Hallway</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
                                        
                                        <tr><th class="text-right2">Exterior Surrounding</th>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="text-align: center;"><input type="checkbox" class="checkbox1" disabled></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;" disabled></td>
                                        </tr>
    
                                        
    
                                        <!-- <tr>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                            <td><input type="checkbox" id="checkbox1"></td>
                                        </tr> -->
                                        
                                    </tbody>
                            </section>
    
                            <section>
                                <table border="1" id="section-2-t" style="margin-top: 40px;">
                                    <thead>
                                        <tr>
                                            <th class="section-th section-2-h" style="width: 20%;"></th>
                                            <th class="section-th section-2-h" style="width: 20%;">NAME</th>
                                            <th class="section-th section-2-h" style="width: 20%;">DESIGNATION</th>
                                            <th class="section-th section-th-b section-2-h" style="width: 20%;">DATE</th>
                                            <th class="section-th section-2-h">SIGNATURE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <th class="">PERFORMED BY</th>
                                            
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                        </tr>
                                        <tr>
                                            <th class="">VERIFIED BY</t>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                        </tr>
                                        <tr>
                                            <th class="">APPROVED BY</th>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;" readonly></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                            </section>
                            
                        </div>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
</div> 