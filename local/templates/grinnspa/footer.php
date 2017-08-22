<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Форма для связи с нами</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="linked-form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <?\Simplecov\Helpres::createButton('submit', 'btn-pulse red', 'Написать')?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        </div><!--Wrapper-->
	</body>
</html>