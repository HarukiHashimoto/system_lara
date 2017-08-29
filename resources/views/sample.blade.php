@extends('layout.master')
@section('content')
    <div class="ui grid">
        <div class="row">
            <div class="twelve wide column">
                <div id="node-popUp">
                  <span id="node-operation">node</span> <br>
                  <table style="margin:auto;">
                    <tr>
                      <td>id</td><td><input id="node-id" value="new value" /></td>
                    </tr>
                    <tr>
                      <td>label</td><td><input id="node-label" value="new value" /></td>
                    </tr>
                    <tr>
                      <td>group</td><td><input id="group" value="usr_node" /></td>
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
                            <input type="radio" name="pon" value="1" /> Posi
                            <input type="radio" name="pon" value="2" /> Nega
                            <input type="radio" name="pon" value="3" /> else
                            </p></td>
                        </tr>
                    </table>
                  <input type="button" value="save" id="edge-saveButton" />
                  <input type="button" value="cancel" id="edge-cancelButton" />
                </div>
                <div id="mymodel_s" class="modelArea">

                </div>
            </div>
            <div class="four wide column">
                <br>
                <br>
                <h5>タグの付与</h5>
                <p>※選択中のノードにタグを付与します．</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h5>ソクラティックな問いリスト</h5>
                <div class="ui vertical menu">
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        理由・根拠の問い
                        <div class="menu">
                            <div class="item">なぜそう言えるのですか？</div>
                            <div class="item">それが真実か，どうやって知ることができますか？</div>
                            <div class="item">別の理由は考えられますか？</div>
                        </div>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        仮定の問い
                        <div class="menu">
                            <div class="item">何を仮定していますか？</div>
                            <div class="item">仮定を正当化できますか？</div>
                            <div class="item">仮定は常に成り立ちますか？</div>
                            <div class="item">別の仮定を置くことはできますか？</div>
                        </div>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        含意・結果の問い
                        <div class="menu">
                            <div class="item">どのような狙いがありますか？</div>
                            <div class="item">それによってどのような結果を期待していますか？</div>
                            <div class="item">他のやり方，提案はありますか？</div>
                        </div>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        観点・見方の問い
                        <div class="menu">
                            <div class="item">長期/短期的スパンで考えることはできますか？</div>
                            <div class="item">誰か別の立場から考えることはできますか？</div>
                            <div class="item">社会システムを良くするという視点から考えることはできますか？</div>
                        </div>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        問いを吟味する問い
                        <div class="menu">
                            <div class="item">この問いは明確ですか？</div>
                            <div class="item">この問いはなぜ重要ですか？</div>
                            <div class="item">この問いに答えるのは簡単ですか？</div>
                            <div class="item">この問いにどのようにして答えることができますか？</div>
                            <div class="item">問いの細分化ができますか？</div>
                            <div class="item">この問いの前に，答えるべき問いはありますか？</div>
                        </div>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="dropdown icon"></i>
                        起源・拠りどころの問い
                        <div class="menu">
                            <div class="item">あなたは何を問題視していますか？</div>
                            <div class="item">あなたは何を最も優先しますか？</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
