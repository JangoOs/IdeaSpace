<!-- a-frame //-->
<a-scene reset-camera embedded>

    <a-assets>
        <a-asset-item id="model-obj" src="{{ $model_obj }}"></a-asset-item>
        <a-asset-item id="model-mtl" src="{{ $model_mtl }}"></a-asset-item>
    </a-assets>

    <a-entity id="camera" position="0 0 4">
        <a-camera></a-camera>
    </a-entity>

    <a-entity scene-floor-grid id="scene-floor-grid"></a-entity>

    <a-sky color="#000000"></a-sky>

    <a-entity id="model" scale="{{ $scale }}" position="0 0 0" rotation="{{ $rotation_x }} {{ $rotation_y }} {{ $rotation_z }}" obj-model="obj: #model-obj; mtl: #model-mtl">
        <a-animation
            begin="start-rotation-y"
            end="stop-rotation-y"
            attribute="rotation"
            dur="8000"
            to="{{ $rotation_x }} -360 {{ $rotation_z }}"
            easing="linear"
            repeat="indefinite">
        </a-animation>
    </a-entity>

</a-scene>
