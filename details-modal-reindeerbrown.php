<?php $id= "PO003"?>
<div class="modal fade details-1" id="details-3" tableindex="1" role="dialog" aria-labelledby="details--" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center"><?php echo getItemName($id)?></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="<?php echo getImage($id)?>" alt="Customizable Coffee Cup" class="details img-responsive"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p><?php echo getDescription($id)?></p>
                            <hr />
                            <p>Price: $<?php echo getRetailCost($id)?></p>
                            <p>Subscriber Price: $<?php echo getSubscriberCost($id)?></p>
                            <form action="add_cart.php" method="post">
                                <div class="form-group">
                                    <div class="col-xs-3">
                                        <input type="hidden" id="itemId" name="itemId" value="<?php echo $id?>">
                                        <input type="hidden" id="custId" name="custId" value="1">
                                        <label for="quantity" id="quantity-label">Quantity:</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" />
                                    </div><br /><br /><br />
                                    <div class="form-group">
                                        <label for="size">Size:</label>
                                        <select name="size" id="size" class="form-control">
                                            <option value=""></option>
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
            </div>
        </div>
    </div>
</div>
