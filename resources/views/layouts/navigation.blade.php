<div>
    <nav>
        <ul class="hidden xl:flex items-center w-full justify-between">
            <li class="flex items-center w-4/5">
                <div>
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo />
                    </a>
                </div>
                <div class="2xl:ml-14">
                    <ul class="flex items-center">
                        <x-nav-element title="Dashboard" route="dashboard" first="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15.8333 7.2583L11.3892 3.80164C10.9992 3.49823 10.5191 3.3335 10.025 3.3335C9.53087 3.3335 9.05085 3.49823 8.66084 3.80164L4.21584 7.2583C3.94871 7.46604 3.73258 7.73208 3.58397 8.03609C3.43535 8.34011 3.35818 8.67407 3.35834 9.01247V15.0125C3.35834 15.4545 3.53393 15.8784 3.84649 16.191C4.15905 16.5035 4.58298 16.6791 5.025 16.6791H15.025C15.467 16.6791 15.891 16.5035 16.2035 16.191C16.5161 15.8784 16.6917 15.4545 16.6917 15.0125V9.01247C16.6917 8.32664 16.375 7.67914 15.8333 7.2583Z" stroke="#FAFAFA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3334 12.5C11.4917 13.6108 8.50669 13.6108 6.66669 12.5" stroke="#FAFAFA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </x-nav-element>
                        <x-nav-element title="Customer" route="customer.index">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                        </x-nav-element>
                        <x-nav-element title="Product" route="product.index">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="4" width="18" height="4" rx="2" />
                                <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                <line x1="10" y1="12" x2="14" y2="12" />
                            </svg>
                        </x-nav-element>
                        @if(auth()->user()->allowedInviteCodeCreation())
                        <x-nav-element title="Invite Code" route="invite_code.index">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 11h6m-3 -3v6" />
                            </svg>
                        </x-nav-element>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="w-1/5 flex justify-end">
                <ul class="flex items-center">
                    <li>
                        <a href="#">
                            <div class="xl:ml-6 2xl:ml-9 pb-1 border-transparent border-b hover:border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <nav x-data="{ 'open': false }">
        <div class="flex items-center xl:hidden w-full justify-between">
            <div>
                <a href="{{ route('dashboard') }}">
                    <x-application-logo />
                </a>
            </div>
            <div>
                <div class="cursor-pointer" @click="open = !open" @click.away="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="hidden icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </div>

                <ul class="transition duration-300 opacity-100 ease-out bg-white  shadow rounded py-1 w-full top-0 left-0 mt-20 z-20 absolute" :class="{ 'hidden': !open }" x-cloak>
                    <x-nav-element-mobile route="dashboard" title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15.8333 7.2583L11.3892 3.80164C10.9992 3.49823 10.5191 3.3335 10.025 3.3335C9.53087 3.3335 9.05085 3.49823 8.66084 3.80164L4.21584 7.2583C3.94871 7.46604 3.73258 7.73208 3.58397 8.03609C3.43535 8.34011 3.35818 8.67407 3.35834 9.01247V15.0125C3.35834 15.4545 3.53393 15.8784 3.84649 16.191C4.15905 16.5035 4.58298 16.6791 5.025 16.6791H15.025C15.467 16.6791 15.891 16.5035 16.2035 16.191C16.5161 15.8784 16.6917 15.4545 16.6917 15.0125V9.01247C16.6917 8.32664 16.375 7.67914 15.8333 7.2583Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3334 12.5C11.4917 13.6108 8.50669 13.6108 6.66669 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </x-nav-element-mobile>
                    <x-nav-element-mobile route="customer.index" title="Customer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                    </x-nav-element-mobile>
                    <x-nav-element-mobile route="product.index" title="Product">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="4" width="18" height="4" rx="2" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <line x1="10" y1="12" x2="14" y2="12" />
                        </svg>
                    </x-nav-element-mobile>
                    @if(auth()->user()->allowedInviteCodeCreation())
                    <x-nav-element-mobile route="invite_code.index" title="Invite Code">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 11h6m-3 -3v6" />
                        </svg>
                    </x-nav-element-mobile>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
