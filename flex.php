<style>
    .flex {
        display: flex;
        height: 300px;
        padding: 15px;
        background-color: #61a0f8;
    }

    .item {
        /*flex: 1;*/
        background-color: #f08bc3;
        margin-left: 15px;
        width:200px;
    }

    .flex-2 {
        flex-grow: 2;
        flex-shrink: 1;
        flex-basis: 0%;
        background-color: #f08bc3;
    }
</style>
<div class="flex">
    <div class="item"></div>
    <div class="item flex-2">aaaaaa</div>
    <div class="item"></div>
</div>
<div class="flex">
    <div class="item">aaaa</div>
    <div class="item flex-2">aaaa</div>
    <div class="item"></div>
</div>