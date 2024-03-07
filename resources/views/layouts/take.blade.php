<x-app-layout>
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.header')
        <div class="p-6">

            <div class="flex justify-between mb-4 items-start">
                <a href="{{ route('dashboard') }}" class="font-medium">
                    <i class="fa-duotone fa-backward fa-2xl px-4 text-red-500"></i>
                    Selected Document Number - <span class="text-red-500 font-bold border-b-2 border-red-500">{{ $tasks->task_number }}</span>
                </a>

            </div>

            <div class="">

               
                    <form action="{{ route('completed.task') }}" method="POST" class="grid grid-cols-3">
                        
                        @csrf
                        <div class="max-w-sm p-2 border">
                            <input type="number" name="task_id" value="{{ $tasks->id }}" class="hidden">
                            <div class="mb-5 text-center">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Category</label>
                                <input readonly type="text" 
                                    class="bg-gray-50 border uppercase border-gray-300 text-gray-900 text-sm text-center font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" 
                                    value="{{ $tasks->category }}"    
                                />
                            </div>
                            
                            <div class="mb-5 text-center">
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Title</label>
                                <input readonly type="text" 
                                    class="bg-gray-50 border uppercase border-gray-300 text-gray-900 text-sm text-center font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" 
                                    value="{{ $tasks->title }}"    
                                />
                            </div>
    
                            <div class="mb-5 text-center">
                                <label for=""
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Title</label>
                                <input readonly type="text" 
                                    class="bg-gray-50 border uppercase border-gray-300 text-gray-900 text-sm text-center font-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" 
                                    value="{{ $tasks->task_number }}"    
                                />
                            </div>
    
                            <div class="mb-5 text-center">
                                <label for=""
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Instruction</label>
                
                                <textarea readonly rows="4" class="block uppercase font-bold p-2.5 w-full text-sm text-left text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
                                    {{ $tasks->description }}
                                </textarea>
                                
                                
                            </div>
                            <div class="mb-5 text-center">
                                <button id="completed_task" type="submit" class="border rounded-md p-3 bg-blue-500 text-white hover:bg-blue-700">Complete Tasked</button>
                            </div>
                            
                        </div>
    
    
                    {{-- pdf --}}
                    <div class="max-h-screen shadow-md overflow-scroll col-span-2" id="contentToPrint">
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
                                            <td class="p-0"><input type="text" name="s1_section" id="" value="{{ $section1[0]->s1_section }}" class="border-1 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                            <td class="p-0"><input type="text" name="s1_title" id="" value="{{ $section1[0]->s1_title }}" class="border-0 focus:ring-0 whitespace-pre-wrap" style="width: 100%; height: 40px;"></td>
                                            <td class="p-0"><input type="text" name="s1_document_number" id="" value="{{ $section1[0]->s1_document_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
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
                                                <td><input type="text" name="s1_effective_date" id="" value="{{ $section1[0]->s1_effective_date }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                                <td><input type="text" name="s1_revision_number" id="" value="{{ $section1[0]->s1_revision_number }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                                <td><input type="text" name="s1_page" id="" value="{{ $section1[0]->s1_page }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                            <section>
                                <div class="section-content">
                                    <span class="span-title-1">TITLE</span>
                                    <span><input type="text" name="s2_title" id="" value="{{ $section2[0]->s2_title }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">DOCUMENT NUMBER</span>
                                    <span><input type="text" name="s2_document_number" id="" value="{{ $section2[0]->s2_document_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">DEPARTMENT</span>
                                    <span><input type="text" name="s2_department" id="" value="{{ $section2[0]->s2_department }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">PREPARED BY</span>
                                    <span><input type="text" name="s2_prepared_by" id="" value="{{ $section2[0]->s2_prepared_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">REVIEWED BY</span>
                                    <span><input type="text" name="s2_reviewed_by" id="" value="{{ $section2[0]->s2_reviewed_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content">
                                    <span class="span-title-1">APPROVED BY</span>
                                    <span><input type="text" name="s2_approved_by" id="" value="{{ $section2[0]->s2_approved_by }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
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
                                            <td><textarea readonly class="border-0" name="s3_change_description_0" id="" cols="50" rows="1">{{ $section3[0]->s3_change_description }}</textarea></td>
                                            <td><input readonly type="text" name="s3_effective_date" id="" value="{{ $section3[0]->s3_effective_date }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td>{{ $section3[1]->s3_page_no }}</td>
                                            <td>{{ $section3[1]->s3_revision_no }}</td>
                                            <td>
                                                <label for="">Revision of the following:</label>
                                                <textarea readonly class="border-0 text-wrap" name="s3_change_description" id="" cols="50" rows="5">{{ $section3[1]->s3_change_description }}</textarea>
                                            </td>
                                            <td><input readonly type="text" name="s3_effective_date" id="" value="{{ $section3[1]->s3_effective_date }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
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
                                            <td class="p-0"><input type="text" name="s4_section" id="" value="{{ $section4[0]->s4_section }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                            <td class="p-0"><input type="text" name="s4_title" id="" value="{{ $tasks->title }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                            <td class="p-0"><input type="text" name="s4_document_number" id="" value="{{ $tasks->task_number }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
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
                                                <td class="p-0"><input type="text" name="s4_effective_date" id="" value="{{ $section4[0]->s4_effective_date }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                                <td><input type="text" name="s4_revision_number" id="" value="{{ $section4[0]->s4_revision_number }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                                <td><input type="text" name="s4_page" id="" value="{{ $section4[0]->s4_page }}" class="border-0 focus:ring-0 text-center" style="width: 100%; height: 40px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                            <section>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">EQUIPMENT:</span>
                                    <span><input type="text" name="s5_equipment" id="" value="{{ $section5[0]->s5_equipment }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">SITE LOCATION:</span>
                                    <span><input type="text" name="s5_site_location" id="" value="{{ $section5[0]->s5_site_location }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">WORK ORDER #:</span>
                                    <span><input type="text" name="s5_work_order" id="" value="{{ $section5[0]->s5_work_order }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">DATE/S PERFORMED:</span>
                                    <span><input type="text" name="s5_date_performed" id="" value="{{ $section5[0]->s5_date_performed }}" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></span>
                                </div>
                                <div class="section-content section-2">
                                    <span class="span-title span-title-2">INSTRUCTION:</span>
                                    <span>
                                        <textarea class="border-0 text-left w-full" name="s5_instruction" id="" cols="50" rows="3">{{ $section5[0]->s5_instruction }}</textarea>
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
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_control_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_control_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_control_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right2">Conference Room</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_conference_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_conference_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_conference_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right2">Pantry Room</t>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_pantry_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_pantry_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_pantry_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right2">Admin Office</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_admin_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_admin_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_admin_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr><th class="text-right2">Manager's Office</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_manager_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_manager_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_manager_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr><th class="text-right2">Comfort Room</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_comfort_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_comfort_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_comfort_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr><th class="text-right2">Storage Room</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_storage_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_storage_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_storage_3" id="" class="border-0 focus:ring-0" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr><th class="text-right2">Hallway</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_hallway_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_hallway_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_hallway_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        
                                        <tr><th class="text-right2">Exterior Surrounding</th>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_exterior_1" class="checkbox1"></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="s6_exterior_2" class="checkbox1"></td>
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="s6_exterior_3" id="" class="border-0 focus:ring-0" style="width: 100%; height: 40px;"></td>
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
                                            
                                            <td style="padding: 0;overflow: hidden;">
                                                <input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr>
                                            <th class="">VERIFIED BY</t>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                                <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        <tr>
                                            <th class="">APPROVED BY</th>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                            <td style="padding: 0;overflow: hidden;"><input type="text" name="" id="" style="width: 100%; height: 40px;"></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                            </section>
                            
                        </div>
                    </div>
    
                   
                    </form>
            </div>

        </div>
    </main>

    @section('scripts')
        <script>
             let responseSuccess = @json(session('success'));
                let responseStatus = @json(session('status'));
                console.log(responseStatus)
                if(responseStatus){
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: responseSuccess,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
        </script>
    @endsection
</x-app-layout>
