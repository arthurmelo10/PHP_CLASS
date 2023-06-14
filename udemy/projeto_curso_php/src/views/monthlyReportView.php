<main class="content">
    <?php
        renderTitle(
            'Relatório Mensal',
            'Acompanhe seu saldo de horas',
            'icofont-ui-calendar'
        );
    ?>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada</th>
                <th>Almoço</th>
                <th>Retorno Al</th>
                <th>Saida</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach($report as $registry): ?>
                        <tr>
                            <td> <?= $registry->work_date?> </td>
                            <td> <?= $registry->time1?> </td>
                            <td> <?= $registry->time2?> </td>
                            <td> <?= $registry->time3?> </td>
                            <td> <?= $registry->time4?> </td>
                            <td> <?= "Saldo"?> </td>
                        </tr>
                    <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td>Horas Trabalhadas</td>
                    <td colspan="3"><?= $sumOfWorkedTime ?></td>
                    <td>Saldo Mensal</td>
                    <td><?= $balance ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
