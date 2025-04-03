<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="md:mx-20 mx-5 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>

        <div class="bg-white py-12">
            <div class="text-center mb-10">
                <h2 class="text-blue-950 text-4xl font-bold">Hubungi Kami</h2>
                <div class="flex justify-center mt-2 gap-2">
                    <div class="w-12 h-1 bg-yellow-400"></div>
                    <div class="w-12 h-1 bg-yellow-400"></div>
                </div>
            </div>
            <div class="flex justify-start flex-wrap py-10 ">
                <div class="md:w-1/2 w-full pb-10">
                    <span class="text-blue-950 text-3xl font-bold">Denah Lokasi</span>
                    <iframe class="mt-5 w-full h-96"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3759336029743!2d104.45192827497925!3d-4.704584495270418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e388fc953e88965%3A0x9768276e6a249388!2sSMAN%201KASUI!5e0!3m2!1sid!2sid!4v1743106100548!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="md:w-1/2 w-full pl-0 md:pl-10 ">
                    <span class="text-blue-950 text-3xl font-bold">Kontak</span>
                    <div class="flex justify-start items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-10 text-blue-950">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                        <a href="mailto:{{ $kontak['email'] }}"
                            class="text-blue-950 font-semibold text-md pl-3">{{ $kontak['email'] }}</a>
                    </div>
                    <div class="flex justify-start items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="md:size-12 size-20 text-blue-950">
                            <path fill-rule="evenodd"
                                d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span
                            class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['alamat'] }}</span>
                    </div>
                    <div class="flex justify-start items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-12 text-blue-950 " viewBox="0 0 90 90"
                            fill="currentColor" id="fax">
                            <path
                                d="M60.189,64.87c0.063-0.006,0.125-0.006,0.184,0h6.432c2.563-0.048,2.563,3.822,0,3.78h-6.432
                                    C57.883,68.739,57.705,65.021,60.189,64.87z M44.055,64.87c0.063-0.006,0.131-0.006,0.193,0h6.422c2.566-0.048,2.566,3.822,0,3.78
                                    h-6.422C41.752,68.755,41.555,65.021,44.055,64.87z M60.373,56.313h6.432c2.563-0.043,2.563,3.828,0,3.781h-6.432
                                    C57.811,60.14,57.811,56.27,60.373,56.313z M44.248,56.313h6.422c2.563-0.043,2.563,3.828,0,3.781h-6.422
                                    C41.68,60.14,41.68,56.27,44.248,56.313z M60.373,47.761h6.432c2.563-0.048,2.563,3.822,0,3.776h-6.432
                                    C57.811,51.583,57.811,47.712,60.373,47.761z M44.248,47.761h6.422c2.563-0.048,2.563,3.822,0,3.776h-6.422
                                    C41.68,51.583,41.68,47.712,44.248,47.761z M47.951,12.75h22.885c0.047,0,0.115,0.015,0.115,0.198v28.808
                                    c0,0.181-0.068,0.203-0.115,0.203H40.217c-0.053,0-0.121-0.021-0.121-0.203V19.9L47.951,12.75z M47.326,9.448
                                    c-0.412,0-0.809,0.155-1.109,0.432l-8.881,8.073c-0.344,0.312-0.537,0.755-0.543,1.219v2.109l-0.02,0.005v47.917
                                    c0,1.411-0.775,2.681-1.729,3.411c-0.949,0.724-2.068,1.032-3.189,1.032H17.123c-1.119,0-2.246-0.308-3.199-1.043
                                    c-0.947-0.729-1.713-2-1.713-3.4V26.63c-2.266,0.645-3.99,2.677-3.99,5.131v42.942c0,2.984,2.553,5.359,5.537,5.359h62.432
                                    c2.984,0,5.531-2.375,5.531-5.359V31.979c0-2.991-2.547-5.355-5.531-5.355h-1.938V12.948c0-1.87-1.51-3.5-3.416-3.5H47.326z">
                            </path>
                            <path
                                d="M46.314 22.974c-1.057-.016-1.916.833-1.916 1.885 0 1.057.859 1.906 1.916 1.891h18.422c1.059.015 1.918-.833 1.918-1.891 0-1.052-.859-1.901-1.918-1.885H46.314zM46.314 30.724c-1.057-.017-1.916.833-1.916 1.891 0 1.051.859 1.901 1.916 1.891h8.422c1.053.01 1.918-.839 1.918-1.891 0-1.058-.865-1.907-1.918-1.891H46.314zM17.092 18.135c-1.063 0-1.756.588-1.756 1.287v49.781c0 .697.693 1.285 1.756 1.285h14.734c1.057 0 1.766-.588 1.766-1.285V19.422c0-.699-.709-1.287-1.766-1.287H17.092z">
                            </path>
                        </svg>


                        <span class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['fax'] }}</span>
                    </div>
                    <div class="flex justify-start items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-12 text-blue-950"
                            viewBox="0 0 50 50" fill="currentColor">
                            <path
                                d="M 14 3.9902344 C 8.4886661 3.9902344 4 8.4789008 4 13.990234 L 4 35.990234 C 4 41.501568 8.4886661 45.990234 14 45.990234 L 36 45.990234 C 41.511334 45.990234 46 41.501568 46 35.990234 L 46 13.990234 C 46 8.4789008 41.511334 3.9902344 36 3.9902344 L 14 3.9902344 z M 18.005859 12.033203 C 18.633859 12.060203 19.210594 12.414031 19.558594 12.957031 C 19.954594 13.575031 20.569141 14.534156 21.369141 15.785156 C 22.099141 16.926156 22.150047 18.399844 21.498047 19.589844 L 20.033203 21.673828 C 19.637203 22.237828 19.558219 22.959703 19.824219 23.595703 C 20.238219 24.585703 21.040797 26.107203 22.466797 27.533203 C 23.892797 28.959203 25.414297 29.761781 26.404297 30.175781 C 27.040297 30.441781 27.762172 30.362797 28.326172 29.966797 L 30.410156 28.501953 C 31.600156 27.849953 33.073844 27.901859 34.214844 28.630859 C 35.465844 29.430859 36.424969 30.045406 37.042969 30.441406 C 37.585969 30.789406 37.939797 31.366141 37.966797 31.994141 C 38.120797 35.558141 35.359641 37.001953 34.556641 37.001953 C 34.000641 37.001953 27.316344 37.761656 19.777344 30.222656 C 12.238344 22.683656 12.998047 15.999359 12.998047 15.443359 C 12.998047 14.640359 14.441859 11.879203 18.005859 12.033203 z">
                            </path>
                        </svg>



                        <span
                            class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['no_telpon'] }}</span>
                    </div>
                    <div class="flex justify-start items-center mt-5">
                        <svg fill="currentColor" version="1.1" id="Layer_1" class="size-12 text-blue-950"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 308 308" xml:space="preserve">
                            <g id="XMLID_468_">
                                <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                    c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                    c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                    c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                    c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                    c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                    c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                    c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                    c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                    C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                    c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                    c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                    M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                    l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                    c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                    C276.546,215.678,222.799,268.994,156.734,268.994z" />
                            </g>
                        </svg>
                        <a href="https://api.whatsapp.com/send?phone={{ $kontak['wa'] }}"
                            class="text-blue-950 font-semibold text-md pl-3 text-justify">{{ $kontak['wa'] }}</a>
                    </div>
                </div>


            </div>

            {{-- start kotak saran --}}
            <div class="text-blue-950 text-2xl font-bold">Kotak Saran</div>
            <form class="max-w-12/12 py-5">
                <div class="mb-5">
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Nama..." required />
                </div>
                <div class="mb-5">
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Email..." required />
                </div>
                <div class="mb-5">
                    <input type="tel" id="number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Nomor Telephone..." required />
                </div>
                <div class="mb-5">
                    <textarea id="message" rows="4" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Pesan..."></textarea>
                </div>



                <button type="submit"
                    class="text-white bg-blue-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Kirim
                    Pesan</button>
            </form>

            {{-- end kotak saran --}}

        </div>

    </div>

</x-layout>
