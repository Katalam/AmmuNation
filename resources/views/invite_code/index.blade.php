<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <x-table-head :value="__('Invite Code')" />
                                <x-table-head :value="__('Created at')" />
                                <x-table-head :value="__('Used at')" />
                                <x-table-head :value="__('Used by')" />
                                <x-table-head :class="'text-center'" :value="__('Active')" />
                                <x-table-head />
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($invite_codes as $invite_code)
                            <tr>
                                <x-table-col :value="$invite_code->code" />
                                <x-table-col :value="$invite_code->created_at->toDateString()" />
                                <x-table-col :value="$invite_code?->user?->created_at?->toDateString() ?? ''" />
                                <x-table-col :value="$invite_code?->user?->username ?? ''" />
                                <x-table-col-badge :class="'text-center'"
                                    :active="$invite_code->used_by == null"
                                    :value="$invite_code->used_by == null ? __('Active') : __('Used')" />
                                <x-table-col :class="'text-right'">
                                    @if($invite_code->user == null)
                                    <form method="POST" action="{{ route('invite_code.destroy', ['invite_code' => $invite_code]) }}" x-data="{ 'open': false }">
                                        @csrf
                                        @method('DELETE')
                                        <div class="font-medium text-indigo-600 hover:text-indigo-900 cursor-pointer" @click="open = true">
                                            {{ __('Delete') }}
                                        </div>
                                        <x-confirm
                                            :value="__('Do you really want to delete that Invite Code?')"
                                            :title="__('Delete Invite Code')"
                                            :button="__('Delete')" />
                                    </form>
                                    @endif
                                </x-table-col>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
