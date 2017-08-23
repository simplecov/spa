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
            <div class="modal-body row">
                <form id="linked-form" class="form col-12">
                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">Ваше имя</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">Ваш телефон</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">Ваша почта</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="mail">
                        </div>
                    </div>
<!--                    <div class="form-group row">-->
<!--                        <label for="example-search-input" class="col-12 col-form-label">Вас заинтересовал</label>-->
<!--                        <div class="col-12">-->
<!--                            <input class="form-control" type="text" name="message" disabled>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">Ваше сообщение</label>
                        <div class="col-12">
                            <textarea class="form-control" type="text" name="message"></textarea>
                        </div>
                    </div>

                    <div class="form-group btn-container">
                        <?\Simplecov\Helpres::createButton('submit', 'btn-pulse red round hover-pulse-stop', 'Написать')?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        </div><!--Wrapper-->
	</body>
</html>