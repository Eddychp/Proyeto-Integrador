
    <aside class="w-64 bg-green-500  rounded-lg h-auto" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded bg-emerald-400">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('associations') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Asociacion</span>
                </a>
            </li>
            <li>
                <a href="{{ route('associates') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="team_x2C__crew_x2C__group_1_"><g><g><g><g><path d="M8,9C6.346,9,5,7.654,5,6s1.346-3,3-3s3,1.346,3,3S9.654,9,8,9z M8,4C6.897,4,6,4.897,6,6s0.897,2,2,2       s2-0.897,2-2S9.103,4,8,4z" fill="#263238"/></g></g></g><g><g><g><path d="M5.5,31C5.224,31,5,30.776,5,30.5v-5C5,25.224,5.224,25,5.5,25S6,25.224,6,25.5v5       C6,30.776,5.776,31,5.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M3.5,21C3.224,21,3,20.776,3,20.5v-7C3,11.882,4.311,10,6,10h4.5c0.276,0,0.5,0.224,0.5,0.5       S10.776,11,10.5,11H6c-1.077,0-2,1.375-2,2.5v7C4,20.776,3.776,21,3.5,21z" fill="#263238"/></g></g></g><g><g><g><g><path d="M5,24H2c-0.551,0-1-0.448-1-1v-2c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v2C6,23.552,5.551,24,5,24        z M5,23v0.5V23L5,23L5,23z M2,21v2h2.999L5,21H2z" fill="#263238"/></g></g></g></g></g><g><g><g><g><path d="M26,9c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S27.654,9,26,9z M26,4c-1.103,0-2,0.897-2,2       s0.897,2,2,2s2-0.897,2-2S27.103,4,26,4z" fill="#263238"/></g></g></g><g><g><g><path d="M29.5,31c-0.276,0-0.5-0.224-0.5-0.5v-10c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5-0.225,0.5-0.5v-6       c0-1.125-0.923-2.5-2-2.5h-4.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5H28c1.689,0,3,1.882,3,3.5v6       c0,0.652-0.418,1.208-1,1.414V30.5C30,30.776,29.776,31,29.5,31z" fill="#263238"/></g></g></g><g><g><g><g><path d="M24,24h-1.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5H24v-2h-1.5c-0.276,0-0.5-0.224-0.5-0.5        s0.224-0.5,0.5-0.5H24c0.551,0,1,0.448,1,1v2C25,23.552,24.551,24,24,24z" fill="#263238"/></g></g></g></g></g><g><g><g><g><path d="M17,7c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S18.654,7,17,7z M17,2c-1.103,0-2,0.897-2,2       s0.897,2,2,2s2-0.897,2-2S18.103,2,17,2z" fill="#263238"/></g></g></g><g><g><g><path d="M26.5,31c-0.276,0-0.5-0.224-0.5-0.5v-7c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7       C27,30.776,26.776,31,26.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M8.5,31C8.224,31,8,30.776,8,30.5v-7C8,23.224,8.224,23,8.5,23S9,23.224,9,23.5v7       C9,30.776,8.776,31,8.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M14.5,31c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6       C15,30.776,14.776,31,14.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M20.5,31c-0.276,0-0.5-0.224-0.5-0.5v-11c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5-0.225,0.5-0.5v-7       c0-1.125-0.923-2.5-2-2.5h-4c-1.077,0-2.063,1.386-2.114,2.521L12.5,19.524c-0.013,0.275-0.266,0.498-0.523,0.475       c-0.276-0.013-0.489-0.247-0.476-0.523l0.387-8.002C11.961,9.835,13.309,8,15,8h4c1.689,0,3,1.882,3,3.5v7       c0,0.652-0.418,1.208-1,1.414V30.5C21,30.776,20.776,31,20.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M17.5,30.5v-9V30.5z" fill="#263238"/></g></g><g><g><path d="M17.5,31c-0.276,0-0.5-0.224-0.5-0.5v-9c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v9       C18,30.776,17.776,31,17.5,31z" fill="#263238"/></g></g></g><g><g><g><g><path d="M14,23h-3c-0.551,0-1-0.448-1-1v-2c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v2        C15,22.552,14.551,23,14,23z M14,22v0.5V22L14,22L14,22z M11,20v2h2.999L14,20H11z" fill="#263238"/></g></g></g></g></g></g></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Empadronamiento</span>
                </a>
            </li>
            <li>
                <a href="{{ route('activities') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Actividades</span>
                </a>
            </li>
            <li>
                <a href="{{ route('assistences') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="25px" height="25px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve"><path d="M192.498,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S183.22,124.8,192.498,124.8zM171.798,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S162.52,166.6,171.798,166.6zM144.998,203.3h-18.9h-18.9c-11.5,0-18.7,9.5-18.7,21.4V254h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1C163.998,212.8,156.698,203.3,144.998,203.3z M149.698,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S140.42,124.8,149.698,124.8z M199.098,183.4c0,9.3,7.5,16.8,16.8,16.8s16.8-7.5,16.8-16.8s-7.5-16.8-16.8-16.8S199.098,174.1,199.098,183.4z M197.398,203.3c-11.5,0-18.7,9.5-18.7,21.4V254h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-19V203.3z M39.798,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S30.52,166.6,39.798,166.6z M14.798,253.9v-25.8c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-18.9c-11.5,0-18.7,9.5-18.7,21.4v29.3L14.798,253.9L14.798,253.9z M109.298,183.4c0,9.3,7.5,16.8,16.8,16.8c9.3,0,16.8-7.5,16.8-16.8s-7.5-16.8-16.8-16.8S109.298,174.1,109.298,183.4z M61.298,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S52.02,124.8,61.298,124.8z M106.698,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S97.42,124.8,106.698,124.8z M84.098,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S74.82,166.6,84.098,166.6z M96.289,2v26.079H82.163v55.236c0,5.94,4.636,10.685,10.613,10.685h70.449c5.976,0,10.613-4.745,10.613-10.685V2H96.289z M167.281,83.134h-0.072c0,2.173-1.775,3.984-3.912,3.984H92.776c-2.137,0-4.093-1.666-4.093-3.803V34.961h7.606v42.378c0,1.847,1.485,3.405,3.441,3.405c1.956,0,3.441-1.449,3.441-3.405V8.882h64.11V83.134z M160.399,41.48h-50.709V15.402h50.709V41.48z M131.061,55.244h-21.37v-6.52h21.37V55.244z M139.391,48.724h21.008v6.52h-21.008V48.724z M131.061,67.921h-21.37v-6.52h21.37V67.921z M139.391,61.402h21.008v6.52h-21.008V61.402z M139.391,74.441h21.008v6.52h-21.008V74.441z M131.061,80.961h-21.37v-6.52h21.37V80.961z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Asistencia</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                </a>
            </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white dark:text-gray-400" focusable="false" data-prefix="fas" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path></svg>
                    <span class="ml-4">Upgrade to Pro</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3">Documentation</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    <span class="ml-3">Components</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3">Help</span>
                </a>
            </li>
        </ul>
        </div>

    </aside>


