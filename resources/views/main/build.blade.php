<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <hr />
            <br />
            <br />
            {{-- メインの部分 --}}
            <h3 class="ui header">利用できるパーツ群</h1>
            <div class="ui huge labels" id='dragerea'>
                @foreach ($node as $node_list)
                    <div id={{$node_list->node_name}} class="ui label button item" draggable="true" >
                        {{$node_list->node_name}}
                    </div>
                @endforeach
            </div>

        </div>
        <div class="three wide column"></div>
    </div>
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                        <div class="droparea centered drop1">原因</div>
                    </div>
                    <div class="three wide column">
                        <div class="effect" id='plus'>
                            <table>
                                <tr>
                                    <td class="img"><img id="eimg" class="effect_img" src="/system_lara/public/image/effectsIMG/PlusEffect.png" /></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="five wide column">
                        <div class="droparea centered drop2">結果</div>
                    </div>
                    <div class="three wide column">
                        <div class="centered add">
                            <a class="btn btn-block btn-inverse" id="add_btn">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="three wide column"></div>
    </div>
    <div class="row">
        <div class="one wide column">
        </div>
        <div class="ten wide column">
            <div id="node-popUp">
              <span id="node-operation">node</span> <br>
              <table style="margin:auto;">
                <tr>
                  <td>id</td><td><input id="node-id" value="new value" /></td>
                </tr>
                <tr>
                  <td>label</td><td><input id="node-label" value="new value" /></td>
                </tr>
              </table>
              <input type="button" value="save" id="node-saveButton" />
              <input type="button" value="cancel" id="node-cancelButton" />
            </div>

            <div id="edge-popUp">
                <span id="edge-operation">edge</span> <br>
                <table style="margin:auto;">
                    <tr>
                        {{-- <td>P or N</td> --}}
                        {{-- <td><input id="edge-label" value="new value" /></td> --}}
                        <td><p>
                        <input type="radio" name="pon" value="1"> Posi
                        <input type="radio" name="pon" value="2"> Nega
                        <input type="radio" name="pon" value="3"> 結論

                        </p></td>
                    </tr>
                </table>
              <input type="button" value="save" id="edge-saveButton" />
              <input type="button" value="cancel" id="edge-cancelButton" />
            </div>
            <div id="mymodel" class="modelArea"></div>
        </div>
        <div class="four wide column">
            <h5>問い</h5>
            <div class="genq">
                <a href="#" class="ui button primary" id="genq_btn">問いノード生成</a>
            </div>
            <div class="question_list">
                <table>
                    <tr>
                        <td class="question_table">
                            <p><input type="radio" name="question" value="長期的に影響を考えると結果は変わりますか？" id='q1'> 長期的に影響を考えると結果は変わりますか？</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="question_table">
                            <p><input type="radio" name="question" value="社会システムを良くすることを考えたとき結論はどうなりますか？" id='q2'> 社会システムを良くすることを考えたとき結論はどうなりますか？</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="question_table">
                            <p><input type="radio" name="question" value="1" id='q3'> 暗黙になっている前提，仮定は無いだろうか？</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="question_table">
                            <p><input type="radio" name="question" value="1" id='q4'> 結果は一般的に成り立つものだろうか？</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="add_question">
                <div class="ui fluid action input">
                  <input type="text" placeholder="New Question...">
                  <a href="#" class="ui button default">Add</a>
                </div>
            </div>


        </div>
        <div class="one wide column">
        </div>

    </div>
    {{-- <div class="row">
        <div class="two wide column">
        </div>
        <div class="twelve wide column">
        </div>
        <div class="two wide column">
        </div>
    </div> --}}
</div>
<br>
<br>
<br>
<br>
<br>
