@if(Auth::user()->role == 1)
	@include('sublayouts.doctormanager')
@endif
@if(Auth::user()->role == 2)
	@include('sublayouts.doctor')    <!-- Main -->
@endif
@if(Auth::user()->role == 3)
	@include('sublayouts.BassemManager')
@endif
@if(Auth::user()->role == 4)
	@include('sublayouts.DataEntryClinc')
@endif
@if(Auth::user()->role == 5)
	@include('sublayouts.DataEntryDiwan')
@endif
@if(Auth::user()->role == 6)
	@include('sublayouts.DataEntryEmergency')
@endif
@if(Auth::user()->role == 7)
	@include('sublayouts.DataEntryHR')
@endif
@if(Auth::user()->role == 8)
	@include('sublayouts.DataEntryOperation')
@endif
@if(Auth::user()->role == 9)
	@include('sublayouts.DataEntryPharm')
@endif
@if(Auth::user()->role == 10)
	@include('sublayouts.DataEntryPlanning&statis')
@endif
@if(Auth::user()->role == 11)
	@include('sublayouts.DataEntryQathter')
@endif
@if(Auth::user()->role == 12)
	@include('sublayouts.DataEntryRoomF2') <!-- Main -->
@endif
@if(Auth::user()->role == 13)
	@include('sublayouts.DataEntryRoomF3')
@endif
@if(Auth::user()->role == 14)
	@include('sublayouts.DataEntryStorage')   <!-- Main -->
@endif
@if(Auth::user()->role == 15)
	@include('sublayouts.patient') <!-- Main -->
@endif

@if(Auth::user()->role == 16)
	@include('sublayouts.EngSectionManager') <!-- Main -->
@endif

@if(Auth::user()->role == 90)
	@include('sublayouts.publicdash')
@endif






