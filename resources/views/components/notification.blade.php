<!-- Modal -->
<div
    class="modal fade"
    id="{{$id}}"
    tabindex="-1"
    aria-labelledby="{{$id}}Label"
    aria-hidden="true"
>
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-{{$color}}">
            <h5 class="modal-title text-{{$textColor}}" id="{{$id}}Label">{{$title}}</h5>
        <button
            type="button"
            class="btn-close"
            data-dismiss="modal"
            aria-label="Close"
        ></button>

        </div>
        <div class="modal-body">{{$content}}</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-{{$color}}" data-dismiss="modal">
                Close
            </button>
        </div>
    </div>
    </div>
</div>