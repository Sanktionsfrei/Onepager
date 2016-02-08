<div class="modal fade" id="impressum" tabindex="-1" role="dialog" aria-labelledby="impressumModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="impressumModal">Impressum</h4>
            </div>
            <div class="modal-body text-left">
                @include('content.imprint')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">schlie&szlig;en</button>
            </div>
        </div>
    </div>
</div>
{{-- MODAL MIT PRESSEKONTAKT --}}
<div class="modal fade" id="press" tabindex="-1" role="dialog" aria-labelledby="presseModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="presseModal">Pressebereich</h4>
            </div>
            <div class="modal-body">
                @include('content.press')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">schlie&szlig;en</button>
            </div>
        </div>
    </div>
</div>