@extends('layout.app')

@section('content')
        <h1>This is Board of trustees</h1>
        <div class="wow">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="/aboutus/schoolprofile" role="tab" aria-controls="home">History & School Profile</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="/aboutus/smsc" role="tab" aria-controls="profile">School Management Comittee</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="/aboutus/bot" role="tab" aria-controls="messages">Board of trustee</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="/aboutus/cont" role="tab" aria-controls="settings">Contributors</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"></div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"></div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"></div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"></div>
              </div>
            </div>
          </div>
        @endsection