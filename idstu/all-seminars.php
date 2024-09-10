<?php
/* Template Name: Все Семинары */

get_header(); ?>

<?php
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = intval($_GET['month']);
    $year = intval($_GET['year']);
} else {
    $month = date('m');
    $year = date('Y');
}
?>

<form method="GET" action="">
    <label for="month">Месяц:</label>
    <select name="month" id="month">
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?php echo $i; ?>" <?php selected($i, $month); ?>><?php echo date('F', mktime(0, 0, 0, $i, 1)); ?></option>
        <?php endfor; ?>
    </select>

    <label for="year">Год:</label>
    <select name="year" id="year">
        <?php for ($i = $year - 5; $i <= $year + 5; $i++): ?>
            <option value="<?php echo $i; ?>" <?php selected($i, $year); ?>><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>

    <button type="submit">Показать</button>
</form>

<?php
$calendar = array();

for ($day = 1; $day <= date('t', strtotime($year . '-' . $month . '-01')); $day++) {
    $seminars = get_seminars_by_date($year, $month, $day);
    $calendar[$day] = !empty($seminars);
}
wp_reset_postdata();
?>

<table class="calendar">
    <thead>
        <tr>
            <th>Пн</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пт</th>
            <th>Сб</th>
            <th>Вс</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $first_day = date('N', strtotime($year . '-' . $month . '-01'));
        $days_in_month = date('t', strtotime($year . '-' . $month . '-01'));
        $day_counter = 1;

        for ($week = 1; $week <= 6; $week++) {
            echo '<tr>';
            for ($day = 1; $day <= 7; $day++) {
                if (($week == 1 && $day < $first_day) || $day_counter > $days_in_month) {
                    echo '<td></td>';
                } else {
                    echo '<td>';
                    if ($calendar[$day_counter]) {
                        echo '<span class="seminar-day">' . $day_counter . '</span>';
                    } else {
                        echo $day_counter;
                    }
                    echo '</td>';
                    $day_counter++;
                }
            }
            echo '</tr>';
            if ($day_counter > $days_in_month) break;
        }
        wp_reset_postdata();
        ?>
    </tbody>
</table>

<?php get_footer(); ?>