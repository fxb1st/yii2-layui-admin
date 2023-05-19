/* jshint esversion: 6 */


$('#test').click(()=>{
    let selection = $('#test-gridview').yiiGridView('getSelectedRows')
    layer.alert(selection.length);
});

layui.use(['form'], ()=>{
    let form = layui.form;
    let gridView = $('#test-gridview');
    form.on('checkbox(checkAll)', (obj)=>{
        gridView.find("input.checkbox-item:enabled").prop('checked', obj.elem.checked).change()
        form.render();
    })
    form.on('checkbox(checkOne)', (obj)=>{
        let all = gridView.find("input.checkbox-item").length === gridView.find("input.checkbox-item:checked").length;
        gridView.find("input[name='selection_all']").prop('checked', all).change();
        form.render();
    })
})