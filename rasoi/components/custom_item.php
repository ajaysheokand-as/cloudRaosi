<?php

function custom_item()
{ ?>
    <style>
        .custom_item_main {
            height: 30%;
            border: 2px solid green;
            margin: 10px;
            /* width: 65%; */
            box-shadow: 5px;
        }
        .item{
            display: flex;
            flex-direction: column;
            border: 2px solid green;
            text-align: center;
            border-radius: 3px;
            height: fit-content;
            margin: 2px;
        }
        .item:hover{
            background-color: whitesmoke;
        }
        .item__name{
            font-size: 1.1rem;
            font-weight: 700;
        }
        .item__btn{
            border: 1px solid grey;
            border-radius: 3px;
            /* margin: 4px; */
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
        }
        .item__btn:hover{
            background-color: green;
            cursor: pointer;
            color: white;
        }
    </style>

    <div class="row container custom_item_main">
        <?php for($i = 1; $i<=12; $i++ ) { ?>
        <div class="col-lg-2 col-md-2 ">
            <div class="w-100 item">
                <span class="p-2 item__name">Burger Burger(333)</span>
                <button class="item__btn">Add</button>
            </div>
        </div>
        <?php } ?>
    </div>

    <?php
}


function custom_item_select()
{ ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>